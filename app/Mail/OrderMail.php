<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $sendmail;
    public $order_id;
    public $order_url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sendmail, $order_id = null)
    {
        $this->sendmail = $sendmail;
        $this->order_id = $order_id;

        // สร้าง URL สำหรับตรวจสอบรายการยืม
        if ($order_id) {
            $this->order_url = route('order-list-view', $order_id);
        } else if (isset($sendmail[0]['order']['id'])) {
            $this->order_url = route('order-list-view', $sendmail[0]['order']['id']);
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order = $this->sendmail;
        return $this->from('library@sru.ac.th', 'ระบบยืมออนไลน์')
        ->subject('แจ้งข้อมูลการยืมออนไลน์ - SRU Library')
        ->view('mail.order_mail', compact('order'));
    }
}
