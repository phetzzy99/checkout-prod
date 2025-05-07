<!DOCTYPE html>
<html lang="th">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>รายงานการยืมออนไลน์</title>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ storage_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ storage_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        body {
            font-family: "THSarabunNew";
            font-size: 16px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .summary-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .summary-table th, .summary-table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .summary-table th {
            background-color: #f2f2f2;
            text-align: left;
        }
        .orders-table {
            width: 100%;
            border-collapse: collapse;
        }
        .orders-table th, .orders-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .orders-table th {
            background-color: #f2f2f2;
        }
        .page-break {
            page-break-after: always;
        }
        .table-header {
            background-color: #4a5568;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>รายงานการยืมออนไลน์</h1>
        <h3>หอสมุดกลาง มหาวิทยาลัยราชภัฏสุราษฎร์ธานี</h3>

        @if ($startDate && $endDate)
            <h4>ระหว่างวันที่ {{ $startDate->format('d/m/Y') }} ถึง {{ $endDate->format('d/m/Y') }}</h4>
        @elseif ($selectedMonth && $selectedYear)
            <h4>เดือน {{ ['', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'][(int)$selectedMonth] }} ปี {{ $selectedYear + 543 }}</h4>
        @elseif ($selectedYear)
            <h4>ปี {{ $selectedYear + 543 }}</h4>
        @endif

        @if ($selectedStaffId)
            <h4>เจ้าหน้าที่: {{ App\Models\Staff::find($selectedStaffId)->name }}</h4>
        @endif
    </div>

    <h2>ข้อมูลสรุป</h2>

    <table class="summary-table">
        <tr>
            <th>จำนวนการยืมทั้งหมด</th>
            <td>{{ $summary['total_orders'] }} รายการ</td>
        </tr>
        <tr>
            <th>จำนวนหนังสือที่ยืมทั้งหมด</th>
            <td>{{ $summary['total_items'] }} เล่ม</td>
        </tr>
    </table>

    <h3>แยกตามคณะ/หน่วยงาน</h3>
    <table class="summary-table">
        <tr>
            <th>คณะ/หน่วยงาน</th>
            <th>จำนวน</th>
        </tr>
        @foreach($summary['by_faculty'] as $faculty => $count)
            <tr>
                <td>{{ $faculty }}</td>
                <td>{{ $count }}</td>
            </tr>
        @endforeach
    </table>

    <h3>แยกตามประเภทสมาชิก</h3>
    <table class="summary-table">
        <tr>
            <th>ประเภทสมาชิก</th>
            <th>จำนวน</th>
        </tr>
        @foreach($summary['by_patron_type'] as $type => $count)
            <tr>
                <td>{{ $type }}</td>
                <td>{{ $count }}</td>
            </tr>
        @endforeach
    </table>

    <h3>แยกตามสถานะ</h3>
    <table class="summary-table">
        <tr>
            <th>สถานะ</th>
            <th>จำนวน</th>
        </tr>
        @if(isset($summary['by_status']['success']))
            <tr>
                <td>สำเร็จ</td>
                <td>{{ $summary['by_status']['success'] }}</td>
            </tr>
        @endif
        @if(isset($summary['by_status']['pending']))
            <tr>
                <td>รอยืนยัน</td>
                <td>{{ $summary['by_status']['pending'] }}</td>
            </tr>
        @endif
    </table>

    <div class="page-break"></div>

    <h2>รายละเอียดการยืม</h2>

    <table class="orders-table">
        <tr class="table-header">
            <th>วันที่</th>
            <th>เลขที่ใบยืม</th>
            <th>ชื่อ-นามสกุล</th>
            <th>คณะ/หน่วยงาน</th>
            <th>ประเภทสมาชิก</th>
            <th>จำนวนรายการ</th>
            <th>สถานะ</th>
            <th>ผู้ยืนยัน</th>
        </tr>
        @foreach($orders as $order)
            <tr>
                <td>{{ Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                <td>{{ $order->invoice_no }}</td>
                <td>{{ $order->firstname }} {{ $order->lastname }}</td>
                <td>{{ $order->faculty->faculty_name_th ?? '-' }}</td>
                <td>{{ $order->patrontype->patron_type_name ?? '-' }}</td>
                <td>{{ $order->orderItems->count() }}</td>
                <td>{{ $order->status == 'success' ? 'สำเร็จ' : 'รอยืนยัน' }}</td>
                <td>
                    @php
                        $staff = null;
                        if ($order->notifications->isNotEmpty()) {
                            $notification = $order->notifications->first();
                            if ($notification->is_read && $notification->staff) {
                                $staff = $notification->staff->name;
                            }
                        }
                    @endphp
                    {{ $staff ?? '-' }}
                </td>
            </tr>
        @endforeach
    </table>

    <div style="text-align: right; margin-top: 20px; font-size: 12px;">
        <p>พิมพ์เมื่อ: {{ now()->format('d/m/Y H:i:s') }}</p>
    </div>
</body>
</html>
