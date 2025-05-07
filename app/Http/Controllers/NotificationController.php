<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Order;
use App\Models\Staff;
use Illuminate\Http\Request;

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
            }
        }

        $notifications = $query->with('order.faculty')->orderBy('created_at', 'desc')->paginate(10);

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

    public function confirmNotification(Request $request, $id)
    {
        $request->validate([
            'staff_id' => 'required|exists:staff,id',
            'confirmation_note' => 'nullable|string|max:255',
            'item_status' => 'array',
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
        $itemNotes = $request->item_notes ?? [];

        foreach ($order->orderItems as $item) {
            $status = isset($itemStatuses[$item->id]) ? $itemStatuses[$item->id] : 'available';
            $note = isset($itemNotes[$item->id]) ? $itemNotes[$item->id] : null;

            $item->update([
                'status' => $status,
                'note' => $note
            ]);
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
