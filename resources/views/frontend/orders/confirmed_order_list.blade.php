@extends('frontend.main_master')
@section('content')

@section('title')
    รายงานการยืมออนไลน์
@endsection


@php
    $month = date('F');
    $day = date('d');
    $year = date('Y');
    $hour = date('H');
    $seconds = date('');

    $patron_name = App\Models\OrderItem::where('order_id', $patronid)->get();
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-20">
            <h6 class="card-body-title">ข้อมูลรายการยืมทรัพยากรออนไลน์</h6>
            <p class="mg-b-20 mg-sm-b-30">สามารถตรวจสอบรายละเอียดการยืมได้ตามข้อมูลด้านล่างนี้</p>

            <div class="table-wrapper">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="pd-20 bg-gray-200 mb-4">
                        <h5 class="tx-dark">ข้อมูลผู้ยืม</h5>
                        @foreach ($orderItem as $item)
                            @php
                                $order = $item->order;
                                $faculty = DB::table('faculties')->where('id', $order->faculty_id)->first();
                                $patronType = DB::table('patron_types')->where('id', $order->patron_type_id)->first();
                                break;
                            @endphp
                        @endforeach

                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">เลขที่ใบยืม:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $order->invoice_no ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ชื่อ-นามสกุล:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $order->firstname ?? '' }} {{ $order->lastname ?? '' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">รหัสสมาชิก:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $order->patronid ?? '-' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">คณะ/หน่วยงาน:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $faculty->faculty_name_th ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ประเภทสมาชิก:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $patronType->patron_type_name ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">สถานะ:</p>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($order->status == 'success')
                                            <span class="badge badge-success">ยืนยันแล้ว</span>
                                        @else
                                            <span class="badge badge-warning">รอยืนยัน</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card pd-20 pd-sm-20 mg-t-20 mg-b-20">
                        <h6 class="card-body-title mb-4">สถานะการดำเนินการ</h6>

                        @php
                            // กำหนดสถานะปัจจุบันตามข้อมูลในระบบ
                            // 1 = รับรายการ, 2 = กำลังจัดเตรียม, 3 = ยืนยันเรียบร้อยแล้ว
                            $currentStatus = 1; // ค่าเริ่มต้น - เมื่อมีการสร้างออเดอร์

                            if (isset($order)) {
                                if ($order->status == 'pending') {
                                    $currentStatus = 2; // กำลังจัดเตรียม
                                } elseif ($order->status == 'success') {
                                    $currentStatus = 3; // ยืนยันเรียบร้อยแล้ว
                                }
                            }
                        @endphp

                        <div class="timeline-container">
                            <div class="timeline-track">
                                <div class="timeline-progress" style="width: {{ ($currentStatus - 1) * 50 }}%"></div>

                                <div class="timeline-points">
                                    <div class="point-container">
                                        <div class="point {{ $currentStatus >= 1 ? 'completed' : '' }}">
                                            @if($currentStatus >= 1)
                                                <i class="icon ion-document-text"></i>
                                            @endif
                                        </div>
                                        <div class="point-label">รับรายการ</div>
                                    </div>

                                    <div class="point-container">
                                        <div class="point {{ $currentStatus >= 2 ? 'completed' : '' }}">
                                            @if($currentStatus >= 2)
                                                <i class="icon ion-ios-gear"></i>
                                            @endif
                                        </div>
                                        <div class="point-label">กำลังจัดเตรียมทรัพยากร</div>
                                    </div>

                                    <div class="point-container">
                                        <div class="point {{ $currentStatus >= 3 ? 'completed' : '' }}">
                                            @if($currentStatus >= 3)
                                                <i class="icon ion-checkmark-circled"></i>
                                            @endif
                                        </div>
                                        <div class="point-label">ยืนยันเรียบร้อยแล้ว</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
                        .timeline-container {
                            padding: 20px 0;
                        }

                        .timeline-track {
                            position: relative;
                            height: 4px;
                            background-color: #e9ecef;
                            margin: 40px 0;
                        }

                        .timeline-progress {
                            position: absolute;
                            top: 0;
                            left: 0;
                            height: 4px;
                            background-color: #f6993f; /* สีส้มตามภาพตัวอย่าง */
                            max-width: 100%;
                            transition: width 0.5s ease;
                        }

                        .timeline-points {
                            display: flex;
                            justify-content: space-between;
                            position: absolute;
                            width: 100%;
                            top: -18px;
                        }

                        .point-container {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            position: relative;
                        }

                        .point {
                            width: 40px;
                            height: 40px;
                            border-radius: 50%;
                            background-color: #e9ecef;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            color: white;
                            font-weight: bold;
                            z-index: 2;
                        }

                        .point.completed {
                            background-color: #f6993f;
                        }

                        .point i {
                            font-size: 18px;
                        }

                        .point-label {
                            margin-top: 15px;
                            font-size: 14px;
                            text-align: center;
                            color: #495057;
                            width: 160px;
                            margin-left: -60px;
                        }

                        /* สำหรับหน้าจอขนาดเล็ก */
                        @media (max-width: 768px) {
                            .point {
                                width: 30px;
                                height: 30px;
                                font-size: 12px;
                            }

                            .point i {
                                font-size: 14px;
                            }

                            .point-label {
                                font-size: 12px;
                                width: 120px;
                                margin-left: -45px;
                            }
                        }

                        /* สำหรับหน้าจอขนาดเล็กมาก */
                        @media (max-width: 576px) {
                            .point-label {
                                font-size: 10px;
                                width: 90px;
                                margin-left: -30px;
                            }
                        }
                    </style>

                    <table class="table table-bordered table-hover">
                        <thead class="bg-info">
                            <tr>
                                <th class="text-center text-white">ลำดับ</th>
                                <th class="text-white">ชื่อเรื่อง</th>
                                <th class="text-white">ผู้แต่ง</th>
                                <th class="text-white">เลขเรียกหนังสือ</th>
                                <th class="text-center text-white">สถานะ</th>
                                <th class="text-white">หมายเหตุ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i = 1; @endphp
                            @foreach ($orderItem as $item)
                                <tr>
                                    <td class="text-center">{{ $i++ }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ $item->author }}</td>
                                    <td>{{ $item->callnum }}</td>
                                    <td class="text-center">
                                        @if (isset($item->status))
                                            @if ($item->status == 'available')
                                                <span class="badge badge-success">มีให้ยืม</span>
                                            @elseif ($item->status == 'unavailable')
                                                <span class="badge badge-danger">ไม่มีให้ยืม</span>
                                            @elseif ($item->status == 'pending')
                                                <span class="badge badge-warning">กำลังตรวจสอบทรัพยากร</span>
                                            @endif
                                        @else
                                            <span class="badge badge-secondary">รอยืนยัน</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->note ?? '-' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="form-layout-footer mg-t-10">
                    <div class="text-center">
                        <a href="{{ route('order.view') }}" class="btn btn-danger">
                            <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ</a>

                        @if ($order && $order->status != 'success')
                            @php
                                $notification = App\Models\Notification::where('order_id', $patronid)
                                    ->where('is_read', false)
                                    ->first();
                            @endphp
                            @if ($notification)
                                <a href="{{ route('notifications.detail', $notification->id) }}"
                                    class="btn btn-primary ml-2">
                                    <i class="fa fa-check-circle"></i> ยืนยันรายการ
                                </a>
                            @endif
                        @endif
                    </div>
                </div><!-- form-layout-footer -->
            </div><!-- table-wrapper -->
        </div> <!-- card -->
    </div><!-- sl-pagebody -->

    <!-- Footer -->
    @include('frontend.body.footer')
    <!-- End footer -->

</div><!-- sl-mainpanel -->

<style>
    .badge {
        padding: 8px 12px;
        font-size: 12px;
        border-radius: 4px;
    }

    .badge-success {
        background-color: #28a745;
    }

    .badge-danger {
        background-color: #dc3545;
    }

    .badge-warning {
        background-color: #ffc107;
        color: #212529;
    }

    .badge-secondary {
        background-color: #6c757d;
    }

    .table th {
        font-weight: 600;
    }

    .bg-info {
        background-color: #17a2b8 !important;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }
</style>

@endsection
