<?php

namespace App\Http\Controllers;

use App\Mail\ConfirmationMail;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    // public function index()
    // {
    //     $notifications = Notification::with('order')
    //         ->latest()
    //         ->paginate(10);

    //     $staffs = Staff::where('status', 'active')->get();

    //     return view('notifications.index', compact('notifications', 'staffs'));
    // }

    public function index(Request $request)
    {
        $query = Notification::query();

        if ($request->has('status')) {
            if ($request->status === 'read') {
                $query->where('is_read', true);
            } elseif ($request->status === 'unread') {
                $query->where('is_read', false);
            } elseif ($request->status === 'waiting_delivery') {
                $query->where('is_read', true)
                    ->whereHas('order', function($q) {
                        $q->where('status', 'success')
                        ->where('pickup_type', 'department')
                        ->whereNull('delivered_at');
                    });
            }
        }

        $notifications = $query->with(['order' => function($query) {
                $query->with('faculty');
            }])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $staffs = Staff::where('status', 'active')->get();

        return view('notifications.index', compact('notifications', 'staffs'));
    }


    public function getUnreadNotifications()
    {
        $notifications = Notification::with(['order' => function ($query) {
            $query->with('faculty');
        }])
            ->where('is_read', false)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($notifications);
    }

    public function viewNotificationDetail($id)
    {
        $notification = Notification::with(['order' => function($query) {
            $query->with(['faculty', 'patrontype', 'orderItems']);
        }])->findOrFail($id);

        $staffs = Staff::where('status', 'active')->get();

        return view('notifications.detail', compact('notification', 'staffs'));
    }

    // ปรับปรุงเมธอด confirmNotification
    public function confirmNotification(Request $request, $id)
    {
        $request->validate([
            'staff_id' => 'required|exists:staff,id',
            'confirmation_note' => 'nullable|string|max:255',
            'item_status' => 'array',
            'item_reasons' => 'array',
            'item_notes' => 'array',
        ],[
            'staff_id.required' => 'กรุณาเลือกเจ้าหน้าที่ผู้ยืนยัน',
            'staff_id.exists' => 'เจ้าหน้าที่ที่เลือกไม่มีในระบบ',
        ]);

        $notification = Notification::findOrFail($id);
        $order = Order::findOrFail($notification->order_id);

        // อัปเดต Notification เป็น read
        $notification->update([
            'is_read' => true,
            'confirmed_by' => $request->staff_id,
            'confirmation_note' => $request->confirmation_note,
            'confirmed_at' => now(),
        ]);

        // อัปเดตสถานะ Order เป็น success เมื่อเจ้าหน้าที่ยืนยัน
        $order->update([
            'status' => 'success'
        ]);

        // อัปเดตสถานะของแต่ละรายการ
        $itemStatuses = $request->item_status ?? [];
        $itemReasons = $request->item_reasons ?? [];
        $itemNotes = $request->item_notes ?? [];

        foreach ($order->orderItems as $item) {
            $status = isset($itemStatuses[$item->id]) ? $itemStatuses[$item->id] : 'available';

            // กำหนดหมายเหตุจากเหตุผลที่เลือก
            $note = null;
            if ($status === 'unavailable' && isset($itemReasons[$item->id])) {
                // ถ้าเลือก "อื่นๆ" ให้ใช้ข้อความจาก input
                if ($itemReasons[$item->id] === 'other' && isset($itemNotes[$item->id])) {
                    $note = $itemNotes[$item->id];
                }
                // ถ้าไม่ใช่ "อื่นๆ" ให้ใช้ข้อความจากตัวเลือก
                else if ($itemReasons[$item->id] !== 'other') {
                    $note = $itemReasons[$item->id];
                }
            }

            $item->update([
                'status' => $status,
                'note' => $note
            ]);
        }

        // ส่งอีเมลยืนยันไปหาผู้ยืม
        try {
            // ต้องโหลดความสัมพันธ์ orderItems เพื่อใช้ในอีเมล
            $notification->load(['order.orderItems']);
            Mail::to($order->email)->send(new ConfirmationMail($notification));
        } catch (\Exception $e) {
            \Log::error('Failed to send confirmation email: ' . $e->getMessage());
        }

        return redirect()->route('order-list-view', $notification->order_id)
            ->with('success', 'ยืนยันการรับทราบเรียบร้อยแล้ว');
    }

    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['is_read' => true]);

        return redirect()->route('order-list-view', $notification->order_id)
            ->with('success', 'ทำเครื่องหมายว่าอ่านแล้ว');
    }

    public function markAllAsRead()
    {
        Notification::where('is_read', false)
            ->update(['is_read' => true]);

        return back()->with('success', 'ทำเครื่องหมายว่าอ่านทั้งหมดแล้ว');
    }
}
