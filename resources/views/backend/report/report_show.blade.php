@extends('admin.admin_master')
@section('admin')

@section('title')
รายงานการยืมออนไลน์
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">หน้าหลัก</a>
        <a class="breadcrumb-item" href="{{ route('all.report') }}">รายงาน</a>
        <span class="breadcrumb-item active">ผลการค้นหา</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">รายงานการยืมออนไลน์</h6>

            <div class="alert alert-info pd-y-15 pd-x-20 mg-b-20">
                <h6 class="tx-gray-800 mg-b-0"><i class="icon ion-information-circled"></i> ตัวกรองที่ใช้:</h6>
                <div class="row mg-t-10">
                    @if ($startDate && $endDate)
                        <div class="col-md-3">
                            <strong>ช่วงวันที่:</strong> {{ $startDate->format('d/m/Y') }} - {{ $endDate->format('d/m/Y') }}
                        </div>
                    @endif
                    @if ($selectedMonth)
                        <div class="col-md-3">
                            <strong>เดือน:</strong>
                            @php
                                $months = ['', 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
                            @endphp
                            {{ $months[(int)$selectedMonth] }}
                        </div>
                    @endif
                    @if ($selectedYear)
                        <div class="col-md-3">
                            <strong>ปี:</strong> {{ $selectedYear + 543 }}
                        </div>
                    @endif
                    @if ($selectedStaffId)
                        <div class="col-md-3">
                            <strong>เจ้าหน้าที่:</strong>
                            @php
                                $staff = App\Models\Staff::find($selectedStaffId);
                            @endphp
                            {{ $staff ? $staff->name : '-' }}
                        </div>
                    @endif
                </div>
            </div>

            <div class="row mg-b-30">
                <div class="col-md-6">
                    <!-- ข้อมูลสรุป -->
                    <div class="card bd-0">
                        <div class="card-header bg-info pd-y-15 pd-x-20">
                            <h6 class="card-title tx-white mg-b-0">ข้อมูลสรุป</h6>
                        </div>
                        <div class="card-body pd-20">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="tx-primary">จำนวนการยืมทั้งหมด</h5>
                                    <h2 class="tx-danger tx-lato tx-bold mg-b-15">{{ $summary['total_orders'] }} รายการ</h2>

                                    <h5 class="tx-primary">จำนวนหนังสือที่ยืมทั้งหมด</h5>
                                    <h2 class="tx-danger tx-lato tx-bold">{{ $summary['total_items'] }} เล่ม</h2>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="tx-primary">แยกตามคณะ/หน่วยงาน</h5>
                                    <ul class="list-group">
                                        @foreach($summary['by_faculty'] as $faculty => $count)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $faculty }}
                                                <span class="badge badge-primary badge-pill">{{ $count }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="row mg-t-20">
                                <div class="col-md-6">
                                    <h5 class="tx-primary">แยกตามสถานะ</h5>
                                    <ul class="list-group">
                                        @if(isset($summary['by_status']['success']))
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                สำเร็จ
                                                <span class="badge badge-success badge-pill">{{ $summary['by_status']['success'] }}</span>
                                            </li>
                                        @endif
                                        @if(isset($summary['by_status']['pending']))
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                รอยืนยัน
                                                <span class="badge badge-warning badge-pill">{{ $summary['by_status']['pending'] }}</span>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="tx-primary">แยกตามประเภทสมาชิก</h5>
                                    <ul class="list-group">
                                        @foreach($summary['by_patron_type'] as $type => $count)
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{ $type }}
                                                <span class="badge badge-info badge-pill">{{ $count }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- ปุ่มดาวน์โหลด -->
                    <div class="card bd-0">
                        <div class="card-header bg-success pd-y-15 pd-x-20">
                            <h6 class="card-title tx-white mg-b-0">ดาวน์โหลดรายงาน</h6>
                        </div>
                        <div class="card-body pd-20">
                            <form method="POST" action="{{ route('report.download.pdf') }}" class="mb-3">
                                @csrf
                                @if ($startDate && $endDate)
                                    <input type="hidden" name="start_date" value="{{ $startDate }}">
                                    <input type="hidden" name="end_date" value="{{ $endDate }}">
                                @endif
                                @if ($selectedMonth)
                                    <input type="hidden" name="month" value="{{ $selectedMonth }}">
                                @endif
                                @if ($selectedYear)
                                    <input type="hidden" name="year" value="{{ $selectedYear }}">
                                @endif
                                @if ($selectedStaffId)
                                    <input type="hidden" name="staff_id" value="{{ $selectedStaffId }}">
                                @endif
                                <button type="submit" class="btn btn-danger btn-block btn-lg">
                                    <i class="fa fa-file-pdf-o mr-2"></i> ดาวน์โหลด PDF
                                </button>
                            </form>

                            <form method="POST" action="{{ route('report.download.excel') }}">
                                @csrf
                                @if ($startDate && $endDate)
                                    <input type="hidden" name="start_date" value="{{ $startDate }}">
                                    <input type="hidden" name="end_date" value="{{ $endDate }}">
                                @endif
                                @if ($selectedMonth)
                                    <input type="hidden" name="month" value="{{ $selectedMonth }}">
                                @endif
                                @if ($selectedYear)
                                    <input type="hidden" name="year" value="{{ $selectedYear }}">
                                @endif
                                @if ($selectedStaffId)
                                    <input type="hidden" name="staff_id" value="{{ $selectedStaffId }}">
                                @endif
                                <button type="submit" class="btn btn-success btn-block btn-lg">
                                    <i class="fa fa-file-excel-o mr-2"></i> ดาวน์โหลด Excel
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">วันที่</th>
                            <th class="wd-15p">เลขที่ใบยืม</th>
                            <th class="wd-15p">ชื่อ-นามสกุล</th>
                            <th class="wd-15p">คณะ/หน่วยงาน</th>
                            <th class="wd-10p">ประเภทสมาชิก</th>
                            <th class="wd-10p">จำนวนรายการ</th>
                            <th class="wd-10p">สถานะ</th>
                            <th class="wd-10p">ผู้ยืนยัน</th>
                            <th class="wd-10p">รายละเอียด</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                                <td>{{ $order->invoice_no }}</td>
                                <td>{{ $order->firstname }} {{ $order->lastname }}</td>
                                <td>{{ $order->faculty->faculty_name_th ?? '-' }}</td>
                                <td>{{ $order->patrontype->patron_type_name ?? '-' }}</td>
                                <td>{{ $order->orderItems->count() }}</td>
                                <td>
                                    @if($order->status == 'success')
                                        <span class="badge badge-success">สำเร็จ</span>
                                    @else
                                        <span class="badge badge-warning">รอยืนยัน</span>
                                    @endif
                                </td>
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
                                <td>
                                    <a href="{{ route('order-list-view', $order->id) }}" class="btn btn-info btn-sm">
                                        <i class="fa fa-eye"></i> ดูรายละเอียด
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.body.footer')
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'ค้นหา...',
                sSearch: '',
                lengthMenu: '_MENU_ รายการ/หน้า',
                info: 'แสดง _START_ ถึง _END_ จาก _TOTAL_ รายการ',
                paginate: {
                    first: 'หน้าแรก',
                    last: 'หน้าสุดท้าย',
                    next: 'ถัดไป',
                    previous: 'ก่อนหน้า'
                }
            }
        });

        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });
    });
</script>

@endsection
