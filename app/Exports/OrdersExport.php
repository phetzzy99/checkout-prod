<?php

namespace App\Exports;

use App\Models\Order;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class OrdersExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $orders;

    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    public function collection()
    {
        return $this->orders;
    }

    public function headings(): array
    {
        return [
            'วันที่',
            'เลขที่ใบยืม',
            'ชื่อ-นามสกุล',
            'คณะ/หน่วยงาน',
            'ประเภทสมาชิก',
            'จำนวนรายการ',
            'สถานะ',
            'ผู้ยืนยัน'
        ];
    }

    public function map($order): array
    {
        $staff = null;
        if ($order->notifications->isNotEmpty()) {
            $notification = $order->notifications->first();
            if ($notification->staff) {
                $staff = $notification->staff->name;
            }
        }

        return [
            Carbon::parse($order->created_at)->format('d/m/Y H:i'),
            $order->invoice_no,
            $order->firstname . ' ' . $order->lastname,
            $order->faculty ? $order->faculty->faculty_name_th : '-',
            $order->patrontype ? $order->patrontype->patron_type_name : '-',
            $order->orderItems->count(),
            $order->status == 'success' ? 'สำเร็จ' : 'รอยืนยัน',
            $staff ?? '-'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
