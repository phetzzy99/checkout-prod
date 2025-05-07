<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Faculty;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PatronType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class IndexController extends Controller
{
    public function index() {

        $patrontype = PatronType::latest()->get();
        $faculties = Faculty::latest()->get();

        return view('frontend.index',compact('patrontype','faculties'));

    } //end method


    public function ListOrder(){

        $orders = Order::with('faculty')->orderBy('id','DESC')->get();
        //$orders = Order::latest()->get();
        return view('frontend.orders.confirmed_order',compact('orders'));

    } //end method


    public function OrderListView($id){

        $orderItem = OrderItem::with('order')->where('order_id',$id)->orderBy('id','DESC')->get();
        // $faculty = Order::with('faculty')->orderBy('id','DESC')->get();
        // $patrontype = Order::with('patrontype')->orderBy('id','DESC')->get();
        $patronid = $id;

        return view('frontend.orders.confirmed_order_list',compact('orderItem','patronid'));

    } //end method


    public function OrderStore(Request $request){

        $request->validate([
            'addMoreInputFields.*.subject' => 'required',
            'addMoreInputFields.*.author' => 'required',
            'addMoreInputFields.*.callnum' => 'required',

            'faculty_id' => 'required',
            'patrontype_id' => 'required',
            'patronid' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ],[
            'faculty_id.required' => 'กรุณาเลือกข้อมูลหน่วยงาน',
            'patrontype_id.required' => 'กรุณาเลือกข้อมูลประเภทสมาชิก',
            'patronid.required' => 'กรุณาใส่ข้อมูลรหัสสมาชิก',
            'firstname.required' => 'กรุณาใส่ข้อมูลชื่อ',
            'lastname.required' => 'กรุณาใส่ข้อมูลนามสกุล',
            'phone.required' => 'กรุณาใส่ข้อมูลเบอร์โทรศัพท์',
            'phone.numeric' => 'กรุณาใส่หมายเลขเท่านั้น',
            'email.required' => 'กรุณาใส่ข้อมูลอีเมล์',
            'email.email' => 'กรุณาใส่ข้อมูลอีเมล์ให้ถูกต้อง',
        ]
    );

        $order_id = Order::insertGetId([
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
            'status' => 'success',
            'created_at' => Carbon::now(),
        ]);

        foreach ($request->addMoreInputFields as $key => $value) {

            $data = [
                'order_id' => $order_id,
                'subject' => trim($value['subject']),
                'author'=> trim($value['author']),
                'callnum' => trim($value['callnum']),
            ];
            OrderItem::create($data);

            // OrderItem::insert([
            //     'order_id' => $order_id,
            //     'subject' => $value['subject'],
            //     'author'=> $value['author'],
            //     'callnum' => $value['callnum'],
            //     'created_at' => Carbon::now(),
            // ]);

        }

        // Start Send Email

        // foreach ($request->addMoreInputFields as $key => $value) {
        //     $send_mail = [
        //         'invoice_no' => 'EOS'.mt_rand(10000000,99999999),
        //         'subject' => trim($value['subject']),
        //         'author'=> trim($value['author']),
        //         'callnum' => trim($value['callnum']),
        //     ];
        // }
        $send_mail = OrderItem::with('order')->where('order_id',$order_id)->orderBy('id','DESC')->get();

        Mail::to($request->email)->send(new OrderMail($send_mail));

        // End Send Email



        // Line Notify
        $test = 'Test Send message';
        foreach ($send_mail as $item) {

            $message = 'OrderNo: '.$item['order']['invoice_no']."\n".
                        'วันที่: '.Carbon::parse($item['order']['order_date'])->thaidate('j M y')."\n\n".
                        'SRU-CIRCULATION (SP): **มีรายการยืมหนังสือจาก**'."\n".
                        'ชื่อผู้ใช้บริการ: '.$item['order']['firstname'].' '.$item['order']['lastname']."\n".
                        'รหัสสมาชิก: '.$item['order']['patronid']."\n".
                        'เบอร์โทร: '.$item['order']['phone']."\n".
                        'E-Mail: '.$item['order']['email']."\n".
                        'ชื่อเรื่อง: '.$item->subject."\n\n".
                        'ผู้แต่ง: '.$item->author."\n\n".
                        'เลขเรียกหนังสือ: '.$item->callnum;

            Linenotify($message);
        }
        // End Line Notify

        return back()->with('success', 'New subject has been added.');

    }


    // public function LoadingSuccess(){
    //     sleep(1);
    //     return response()->json(['success' => 'Coupon Remove Successfully']);
    // }

}
