@extends('frontend.main_master')
@section('content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="row">
                <div class="col-lg-12 mx-auto">
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
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">สถานะการยืม:</p>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($notification->order->status == 'success')
                                            <span class="badge badge-success">ยืนยันแล้ว</span>
                                        @else
                                            <span class="badge badge-warning">รอยืนยัน</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- รายการทรัพยากรที่ยืม แสดงเป็นตาราง -->
                            <div class="card bd-0 mg-t-20 mg-b-20">
                                <div class="card-header bg-info">
                                    <h6 class="card-title tx-white">รายการทรัพยากรที่ยืม</h6>
                                </div>
                                <div class="card-body">
                                    @if (!$notification->is_read)
                                        <form id="confirmation-form" action="{{ route('notifications.confirm', $notification->id) }}" method="POST">
                                            @csrf
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <thead class="bg-light">
                                                        <tr>
                                                            <th class="text-center" width="5%">ลำดับ</th>
                                                            <th width="30%">ชื่อเรื่อง</th>
                                                            <th width="20%">ผู้แต่ง</th>
                                                            <th width="15%">เลขเรียกหนังสือ</th>
                                                            <th class="text-center" width="15%">สถานะ</th>
                                                            <th width="15%">หมายเหตุ</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($notification->order->orderItems as $index => $item)
                                                            <tr>
                                                                <td class="text-center">{{ $index + 1 }}</td>
                                                                <td>{{ $item->subject }}</td>
                                                                <td>{{ $item->author }}</td>
                                                                <td>{{ $item->callnum }}</td>
                                                                <td class="text-center">
                                                                    <select class="form-control item-status"
                                                                           id="item-status-{{ $item->id }}"
                                                                           name="item_status[{{ $item->id }}]">
                                                                        <option value="available" selected>ยืมได้</option>
                                                                        <option value="unavailable">ยืมไม่ได้</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="item-note-container" id="note-container-{{ $item->id }}" style="display: none;">
                                                                        <input type="text" class="form-control form-control-sm item-note"
                                                                               id="item-note-{{ $item->id }}"
                                                                               name="item_notes[{{ $item->id }}]"
                                                                               placeholder="ระบุเหตุผล">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="form-group mt-4">
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
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th class="text-center" width="5%">ลำดับ</th>
                                                        <th width="30%">ชื่อเรื่อง</th>
                                                        <th width="20%">ผู้แต่ง</th>
                                                        <th width="15%">เลขเรียกหนังสือ</th>
                                                        <th class="text-center" width="15%">สถานะ</th>
                                                        <th width="15%">หมายเหตุ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($notification->order->orderItems as $index => $item)
                                                        <tr>
                                                            <td class="text-center">{{ $index + 1 }}</td>
                                                            <td>{{ $item->subject }}</td>
                                                            <td>{{ $item->author }}</td>
                                                            <td>{{ $item->callnum }}</td>
                                                            <td class="text-center">
                                                                @php
                                                                    $isAvailable = isset($item->status) ? $item->status == 'available' : true;
                                                                @endphp
                                                                @if($isAvailable)
                                                                    <span class="badge badge-success">มีให้ยืม</span>
                                                                @else
                                                                    <span class="badge badge-danger">ไม่มีให้ยืม</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                {{ $item->note ?? '-' }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            @if ($notification->is_read)
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

    <style>
        .badge {
            padding: 8px 12px;
            font-size: 12px;
            border-radius: 4px;
            display: inline-block;
        }
        .badge-success {
            background-color: #28a745;
            color: white;
        }
        .badge-danger {
            background-color: #dc3545;
            color: white;
        }
        .badge-warning {
            background-color: #ffc107;
            color: #212529;
        }
        .select2-container {
            width: 100% !important;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        /* สไตล์สำหรับ dropdown */
        .item-status {
            font-size: 14px;
            border-radius: 4px;
        }
        .item-status option[value="available"] {
            background-color: #28a745;
            color: white;
        }
        .item-status option[value="unavailable"] {
            background-color: #dc3545;
            color: white;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            // ตรวจสอบว่า form มี element ที่ต้องการหรือไม่
            if ($('#confirmation-form').length > 0) {
                // ตรวจสอบการส่งฟอร์ม
                $('#confirmation-form').submit(function(e) {
                    const staffId = $('#staff_id').val();
                    if (!staffId) {
                        e.preventDefault();
                        alert('กรุณาเลือกเจ้าหน้าที่ผู้ยืนยัน');
                        return false;
                    }
                    return true;
                });

                // การทำงานของ dropdown
                $('.item-status').on('change', function() {
                    const itemId = this.id.replace('item-status-', '');
                    const noteContainer = $(`#note-container-${itemId}`);

                    if ($(this).val() === 'unavailable') {
                        noteContainer.show();
                        $(`#item-note-${itemId}`).prop('required', true);
                    } else {
                        noteContainer.hide();
                        $(`#item-note-${itemId}`).prop('required', false);
                    }
                });
            }
        });
    </script>
@endsection
