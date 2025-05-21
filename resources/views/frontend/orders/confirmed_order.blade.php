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
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-20">
            <h6 class="card-body-title">ข้อมูลรายการยืมทรัพยากรออนไลน์</h6>
            <p class="mg-b-20 mg-sm-b-30">สามารถตรวจสอบรายละเอียดการยืมได้ตามข้อมูลด้านล่างนี้</p>

            <div class="table-responsive">
                <table id="datatable1" class="table display responsive">
                    <thead>
                        <tr role="row">
                            <th class="wd-15p sorting_desc" tabindex="0" aria-controls="datatable1" rowspan="1"
                                colspan="1" style="width: 25%;" aria-sort="descending"
                                aria-label="First name: activate to sort column descending">วันที่</th>
                            <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1"
                                colspan="1" style="width: 25%;"
                                aria-label="Start date: activate to sort column descending">ชื่อ-สกุล</th>
                            <th class="wd-20p sorting" tabindex="0" aria-controls="datatable1" rowspan="1"
                                colspan="1" style="width: 25%;"
                                aria-label="E-mail: activate to sort column descending">สถานะ</th>
                            <th class="wd-15p sorting" tabindex="0" aria-controls="datatable1" rowspan="1"
                                colspan="1" style="width: 25%;"
                                aria-label="E-mail: activate to sort column descending">สถานที่รับ</th>
                            <th class="wd-10p sorting" tabindex="0" aria-controls="datatable1" rowspan="1"
                                colspan="1" style="width: 25%;"
                                aria-label="E-mail: activate to sort column descending">รายการยืมออนไลน์</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                            <tr role="row" class="odd">
                                <td tabindex="0" data-order="1" class="sorting_1"> <a
                                        href="{{ route('order-list-view', $item->id) }}" title="List checkout detail">
                                        {{ Carbon\Carbon::parse($item->order_date)->thaidate('j M y') }} /
                                        {{ Carbon\Carbon::parse($item->created_at)->thaidate('H:i') }} น. </a></td>
                                <td data-order="3"> <a href="{{ route('order-list-view', $item->id) }}"
                                        title="List checkout detail"> {{ $item->firstname }} {{ $item->lastname }} </a>
                                </td>
                                <td data-order="5">
                                    @if ($item->status == 'unavailable')
                                        <div class="d-flex align-items-center justify-content-start">
                                            <i class="icon ion-close-circled alert-icon tx-20 tx-danger mg-r-5"></i>
                                            <span class="tx-danger">ไม่สามารถยืมได้</span>
                                        </div>
                                    @elseif ($item->status == 'success')
                                        @if ($item->pickup_type == 'department')
                                            @if (empty($item->delivered_at))
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <i class="icon ion-ios-time alert-icon tx-20 tx-warning mg-r-5"></i>
                                                    <span class="tx-warning">รอการจัดส่ง</span>
                                                </div>
                                            @else
                                                <div class="d-flex align-items-center justify-content-start">
                                                    <i class="icon ion-ios-checkmark alert-icon tx-20 tx-success mg-r-5"></i>
                                                    <span class="tx-success">จัดส่งแล้ว</span>
                                                </div>
                                            @endif
                                        @else
                                            <div class="d-flex align-items-center justify-content-start">
                                                <i class="icon ion-ios-checkmark alert-icon tx-20 tx-success mg-r-5"></i>
                                                <span class="tx-success">สำเร็จ</span>
                                            </div>
                                        @endif
                                    @else
                                        <div class="d-flex align-items-center justify-content-start">
                                            <i class="icon ion-ios-time alert-icon tx-20 tx-warning mg-r-5"></i>
                                            <span class="tx-warning">รอยืนยัน</span>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->pickup_type == 'library')
                                        <span class="badge badge-primary">รับที่ห้องสมุด</span>
                                    @else
                                        <span class="badge badge-danger">รับที่หน่วยงาน: {{ $item->pickup_location }}</span>
                                    @endif
                                </td>
                                @php
                                    $numOrderItem = App\Models\OrderItem::with('order')
                                        ->where('order_id', $item->id)
                                        ->count('order_id');
                                @endphp
                                <td>
                                    <a href="{{ route('order-list-view', $item->id) }}" class="btn btn-primary btn-sm"
                                        title="List checkout detail">
                                        <i class="icon ion-document-text"></i> รายการ <span
                                            class="badge badge-danger">{{ $numOrderItem }}</span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>
    </div><!-- sl-pagebody -->

    <!-- Footer -->
    @include('frontend.body.footer')
    <!-- End footer -->

</div><!-- sl-mainpanel -->

<script type="text/javascript">
    $(document).ready(function() {
        'use strict';

        $('#datatable1').DataTable({
            responsive: true,
            ordering: true,
            order: [
                [0, "desc"]
            ],
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });

        // Select2
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });

    });
</script>

@endsection
