<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Notification;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $notification;
    public $subject;
    public $messageType;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Notification $notification, $messageType = 'confirmation')
    {
        $this->notification = $notification;
        $this->messageType = $messageType;

        // กำหนดหัวข้ออีเมลตามประเภทข้อความ
        if ($messageType == 'delivery') {
            $this->subject = 'แจ้งการจัดส่งหนังสือ - SRU Library';
        } elseif ($messageType == 'unavailable') {
            $this->subject = 'แจ้งไม่สามารถยืมหนังสือได้ - SRU Library';
        } else {
            $this->subject = 'ยืนยันรายการยืมเรียบร้อยแล้ว - SRU Library';
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('library@sru.ac.th', 'ระบบยืมออนไลน์')
                    ->subject($this->subject)
                    ->view('mail.confirmation_mail');
    }
}
