@extends('admin.admin_master')
@section('admin')

@section('title')
รายงานการยืมออนไลน์
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.th.min.js"></script>

<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('dashboard') }}">หน้าหลัก</a>
        <span class="breadcrumb-item active">รายงานการยืมออนไลน์</span>
    </nav>
    <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">รายงานการยืมออนไลน์</h6>
            <p class="mg-b-20 mg-sm-b-30">กรุณาเลือกตัวกรองเพื่อดูรายงาน</p>

            <div class="form-layout">
                <form method="POST" action="{{ route('report.by.filter') }}" id="report-form">
                    @csrf
                    <div class="card bd-0 mg-b-20">
                        <div class="card-header bg-info">
                            <h6 class="card-title tx-white">กรองตามช่วงวันที่</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">วันที่เริ่มต้น:</label>
                                        <input type="text" name="start_date" class="form-control datepicker" placeholder="เลือกวันที่เริ่มต้น">
                                        @error('start_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">วันที่สิ้นสุด:</label>
                                        <input type="text" name="end_date" class="form-control datepicker" placeholder="เลือกวันที่สิ้นสุด">
                                        @error('end_date')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bd-0 mg-b-20">
                        <div class="card-header bg-info">
                            <h6 class="card-title tx-white">กรองตามเดือนและปี</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">เดือน:</label>
                                        <select name="month" class="form-control">
                                            <option value="">เลือกเดือน</option>
                                            <option value="1">มกราคม</option>
                                            <option value="2">กุมภาพันธ์</option>
                                            <option value="3">มีนาคม</option>
                                            <option value="4">เมษายน</option>
                                            <option value="5">พฤษภาคม</option>
                                            <option value="6">มิถุนายน</option>
                                            <option value="7">กรกฎาคม</option>
                                            <option value="8">สิงหาคม</option>
                                            <option value="9">กันยายน</option>
                                            <option value="10">ตุลาคม</option>
                                            <option value="11">พฤศจิกายน</option>
                                            <option value="12">ธันวาคม</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">ปี:</label>
                                        <select name="year" class="form-control">
                                            <option value="">เลือกปี</option>
                                            @for ($i = date('Y'); $i >= 2020; $i--)
                                                <option value="{{ $i }}">{{ $i + 543 }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card bd-0 mg-b-20">
                        <div class="card-header bg-info">
                            <h6 class="card-title tx-white">กรองตามเจ้าหน้าที่ผู้ยืนยัน</h6>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">เจ้าหน้าที่:</label>
                                        <select name="staff_id" class="form-control select2">
                                            <option value="">เลือกเจ้าหน้าที่</option>
                                            @foreach($staffs as $staff)
                                                <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info btn-lg">
                            <i class="fa fa-search"></i> ค้นหารายงาน
                        </button>
                        <button type="reset" class="btn btn-secondary btn-lg">
                            <i class="fa fa-refresh"></i> ล้างข้อมูล
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('admin.body.footer')
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
            language: 'th',
            todayBtn: true
        });

        $('.select2').select2({
            placeholder: "เลือกเจ้าหน้าที่",
            allowClear: true
        });

        // Validate form before submit
        $('#report-form').submit(function(e) {
            var startDate = $('input[name="start_date"]').val();
            var endDate = $('input[name="end_date"]').val();
            var month = $('select[name="month"]').val();
            var year = $('select[name="year"]').val();
            var staffId = $('select[name="staff_id"]').val();

            if (!startDate && !endDate && !month && !year && !staffId) {
                e.preventDefault();
                alert('กรุณาเลือกตัวกรองอย่างน้อย 1 รายการ');
                return false;
            }

            if ((startDate && !endDate) || (!startDate && endDate)) {
                e.preventDefault();
                alert('กรุณาเลือกทั้งวันที่เริ่มต้นและวันที่สิ้นสุด');
                return false;
            }

            if (startDate && endDate && new Date(startDate) > new Date(endDate)) {
                e.preventDefault();
                alert('วันที่สิ้นสุดต้องมากกว่าหรือเท่ากับวันที่เริ่มต้น');
                return false;
            }
        });
    });
</script>
@endsection
