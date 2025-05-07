@extends('admin.admin_master')
@section('admin')

@section('title')
รายละเอียดการแจ้งเตือน
@endsection

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card pd-20 pd-sm-40">
                    <div class="card-header bg-primary">
                        <h6 class="card-title tx-white">รายละเอียดการแจ้งเตือน</h6>
                    </div>

                    <div class="card-body">
                        <div class="alert alert-info mb-4">
                            <h5><i class="fa fa-info-circle"></i> โปรดทราบ</h5>
                            <p class="mb-0">คุณจำเป็นต้องยืนยันรายการแจ้งเตือนนี้ มิฉะนั้นการแจ้งเตือนจะยังคงแสดงอยู่ในระบบ</p>
                        </div>

                        <div class="pd-20 bg-gray-200 mb-4">
                            <h5 class="tx-dark">รายละเอียดการแจ้งเตือน</h5>
                            <div class="row mg-t-10">
                                <div class="col-md-4">
                                    <p class="tx-medium">วันที่แจ้งเตือน:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->created_at->format('d/m/Y H:i:s') }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">ข้อความ:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->message }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-20 bg-gray-200 mb-4">
                            <h5 class="tx-dark">รายละเอียดการยืม</h5>
                            <div class="row mg-t-10">
                                <div class="col-md-4">
                                    <p class="tx-medium">ชื่อ-นามสกุล:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->firstname }} {{ $notification->order->lastname }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">รหัสสมาชิก:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->patronid }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">คณะ/หน่วยงาน:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->faculty->faculty_name_th ?? '-' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">ประเภทสมาชิก:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->patrontype->patron_type_name ?? '-' }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="tx-medium">จำนวนรายการยืม:</p>
                                </div>
                                <div class="col-md-8">
                                    <p>{{ $notification->order->orderItems->count() }} รายการ</p>
                                </div>
                            </div>
                        </div>

                        @if (!$notification->is_read)
                            <form id="confirmation-form" action="{{ route('notifications.confirm', $notification->id) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="staff_id" class="form-control-label">เลือกเจ้าหน้าที่ผู้ยืนยัน: <span class="tx-danger">*</span></label>
                                    <select class="form-control" name="staff_id" id="staff_id" required>
                                        <option value="">-- เลือกเจ้าหน้าที่ --</option>
                                        @foreach ($staffs as $staff)
                                            <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('staff_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="confirmation_note" class="form-control-label">บันทึกเพิ่มเติม:</label>
                                    <textarea class="form-control" name="confirmation_note" id="confirmation_note" rows="3"></textarea>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        <i class="fa fa-check-circle"></i> ยืนยันการรับทราบ
                                    </button>
                                    <a href="{{ route('notifications.index') }}" class="btn btn-secondary btn-lg ml-2">
                                        <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ
                                    </a>
                                </div>
                            </form>
                        @else
                            <div class="bg-gray-200 pd-20">
                                <h5 class="tx-dark">ข้อมูลการยืนยัน</h5>
                                <div class="row mg-t-10">
                                    <div class="col-md-4">
                                        <p class="tx-medium">สถานะ:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p><span class="badge badge-success">ยืนยันแล้ว</span></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">ยืนยันโดย:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->staff->name ?? '-' }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">เวลาที่ยืนยัน:</p>
                                    </div>
                                    <div class="col-md-8">
                                        <p>{{ $notification->confirmed_at ? $notification->confirmed_at->format('d/m/Y H:i:s') : '-' }}</p>
                                    </div>
                                </div>
                                @if ($notification->confirmation_note)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p class="tx-medium">บันทึกเพิ่มเติม:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p>{{ $notification->confirmation_note }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="text-center mt-4">
                                <a href="{{ route('order-list-view', $notification->order_id) }}" class="btn btn-info btn-lg">
                                    <i class="fa fa-eye"></i> ดูรายละเอียดการยืม
                                </a>
                                <a href="{{ route('notifications.index') }}" class="btn btn-secondary btn-lg ml-2">
                                    <i class="fa fa-arrow-left"></i> กลับไปหน้ารายการ
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#confirmation-form').submit(function(e) {
            const staffId = $('#staff_id').val();
            if (!staffId) {
                e.preventDefault();
                alert('กรุณาเลือกเจ้าหน้าที่ผู้ยืนยัน');
                return false;
            }

            return true;
        });
    });
</script>
@endsection
