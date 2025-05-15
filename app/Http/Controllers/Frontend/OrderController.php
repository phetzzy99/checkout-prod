<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function ListOrder()
    {
        $orders = Order::with('faculty')->orderBy('id', 'DESC')->get();
        return view('frontend.orders.confirmed_order', compact('orders'));
    }

    public function OrderListView($id)
    {
        $orderItem = OrderItem::with('order')->where('order_id', $id)->orderBy('id', 'DESC')->get();
        $patronid = $id;

        // Update notification status to read
        // Notification::where('order_id', $id)->update(['is_read' => true]);

        return view('frontend.orders.confirmed_order_list', compact('orderItem', 'patronid'));
    }

    public function OrderStore(Request $request)
    {
        try {
            DB::beginTransaction();

            // Validation
            $request->validate([
                'addMoreInputFields.*.subject' => 'required',
                'addMoreInputFields.*.author' => 'required',
                'addMoreInputFields.*.callnum' => 'required',
                'faculty_id' => 'required',
                'patrontype_id' => 'required',
                'patronid' => 'required|max:13',
                'firstname' => 'required',
                'lastname' => 'required',
                'phone' => 'required|numeric',
                'email' => 'required|email',
                'pickup_type' => 'required|in:library,department',
                'pickup_location' => 'required_if:pickup_type,department',
            ], [
                'faculty_id.required' => 'กรุณาเลือกข้อมูลหน่วยงาน',
                'patrontype_id.required' => 'กรุณาเลือกข้อมูลประเภทสมาชิก',
                'patronid.required' => 'กรุณาใส่ข้อมูลรหัสสมาชิก',
                'patronid.max' => 'กรุณาตรวจสอบจำนวนรหัสสมาชิกให้ถูกต้อง',
                'firstname.required' => 'กรุณาใส่ข้อมูลชื่อ',
                'lastname.required' => 'กรุณาใส่ข้อมูลนามสกุล',
                'phone.required' => 'กรุณาใส่ข้อมูลเบอร์โทรศัพท์',
                'phone.numeric' => 'กรุณาใส่หมายเลขเท่านั้น',
                'email.required' => 'กรุณาใส่ข้อมูลอีเมล์',
                'email.email' => 'กรุณาใส่ข้อมูลอีเมล์ให้ถูกต้อง',
                'pickup_type.required' => 'กรุณาเลือกสถานที่รับหนังสือ',
                'pickup_location.required_if' => 'กรุณาระบุสถานที่รับหนังสือ',
            ]);

            // Create order - เปลี่ยนสถานะเริ่มต้นเป็น 'pending' แทน 'success'
            $order = Order::create([
                'faculty_id' => $request->faculty_id,
                'patron_type_id' => $request->patrontype_id,
                'patronid' => trim($request->patronid),
                'firstname' => trim($request->firstname),
                'lastname' => trim($request->lastname),
                'phone' => trim($request->phone),
                'email' => trim($request->email),
                'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
                'order_date' => Carbon::now()->format('d F Y'),
                'order_month' => Carbon::now()->format('F'),
                'order_year' => Carbon::now()->format('Y'),
                'status' => 'pending', // เปลี่ยนจาก 'success' เป็น 'pending'
                'pickup_type' => $request->pickup_type,
                'pickup_location' => $request->pickup_type === 'department' ? trim($request->pickup_location) : null,
                'created_at' => Carbon::now(),
            ]);

            // Create notification
            Notification::create([
                'order_id' => $order->id,
                'message' => 'มีรายการยืมใหม่จาก ' . $request->firstname . ' ' . $request->lastname,
                'is_read' => false,
            ]);

            // Create order items
            foreach ($request->addMoreInputFields as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'subject' => trim($item['subject']),
                    'author' => trim($item['author']),
                    'callnum' => trim($item['callnum']),
                    'created_at' => Carbon::now(),
                ]);
            }

            // Send Pusher notification
            try {
                $pusher = new \Pusher\Pusher(
                    env('PUSHER_APP_KEY'),
                    env('PUSHER_APP_SECRET'),
                    env('PUSHER_APP_ID'),
                    [
                        'cluster' => env('PUSHER_APP_CLUSTER'),
                        'useTLS' => true
                    ]
                );

                $order->load('faculty'); // Eager load faculty relationship
                $notification_data = [
                    'order' => $order,
                    'notification' => [
                        'title' => 'มีรายการยืมใหม่',
                        'message' => "รายการยืมใหม่จาก {$order->firstname} {$order->lastname}"
                    ]
                ];
                // $pusher->trigger('orders', 'new-order', ['order' => $order]);
                $pusher->trigger('orders', 'new-order', $notification_data);

            } catch (\Exception $e) {
                \Log::error('Pusher notification failed: ' . $e->getMessage());
            }

            // Send email
            try {
                $orderItems = OrderItem::with('order')
                    ->where('order_id', $order->id)
                    ->orderBy('id', 'DESC')
                    ->get();

                Mail::to($request->email)->send(new OrderMail($orderItems, $order->id));
            } catch (\Exception $e) {
                \Log::error('Email sending failed: ' . $e->getMessage());
            }

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'รายการยืมถูกบันทึกเรียบร้อยแล้ว',
                'order' => $order // ส่งข้อมูล order กลับไปด้วย
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Order creation failed: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง'
            ], 500);
        }
    }

    public function updateDeliveryStatus(Request $request, $id)
    {
        try {
            $order = Order::findOrFail($id);

            // ตรวจสอบว่าเป็นการรับที่หน่วยงานและยังไม่ได้จัดส่ง
            if ($order->pickup_type == 'department' && empty($order->delivered_at)) {
                $order->update([
                    'delivered_at' => now()
                ]);

                // หาการแจ้งเตือนที่เกี่ยวข้อง
                $notification = Notification::where('order_id', $id)->where('is_read', true)->first();

                if ($notification) {
                    // ถ้าการอัปเดตเริ่มจากหน้า notification/detail ให้กลับไปที่หน้าเดิม
                    return redirect()->route('notifications.detail', $notification->id)
                        ->with('success', 'อัปเดตสถานะการจัดส่งเรียบร้อยแล้ว');
                }

                // ถ้าไม่ได้เริ่มจากหน้า notification/detail ให้กลับไปที่หน้า order-list-view
                return redirect()->route('order-list-view', $id)
                    ->with('success', 'อัปเดตสถานะการจัดส่งเรียบร้อยแล้ว');
            }

            return redirect()->back()->with('error', 'ไม่สามารถอัปเดตสถานะการจัดส่งได้');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'เกิดข้อผิดพลาด: ' . $e->getMessage());
        }
    }

}
