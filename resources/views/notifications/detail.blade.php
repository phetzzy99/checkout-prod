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
                                        <p class="tx-medium">สถานที่รับหนังสือ:</p>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($notification->order->pickup_type == 'library')
                                            <p>รับที่ห้องสมุด</p>
                                        @else
                                            <p>รับที่หน่วยงาน: {{ $notification->order->pickup_location }}</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="tx-medium">สถานะการยืม:</p>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($notification->order->status == 'success')
                                            @if ($notification->order->pickup_type == 'department')
                                                @if (empty($notification->order->delivered_at))
                                                    <span class="badge badge-warning">รอการจัดส่ง</span>
                                                @else
                                                    <span class="badge badge-success">จัดส่งแล้ว</span>
                                                @endif
                                            @else
                                                <span class="badge badge-success">ยืนยันแล้ว</span>
                                            @endif
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
                                                                        <option value="available" selected>มีให้ยืม</option>
                                                                        <option value="unavailable">ไม่มีให้ยืม</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <div class="item-note-container" id="note-container-{{ $item->id }}" style="display: none;">
                                                                        <!-- เพิ่มตัวเลือกสาเหตุการยืมไม่ได้ -->
                                                                        <select class="form-control form-control-sm item-reason mb-2"
                                                                            id="item-reason-{{ $item->id }}"
                                                                            name="item_reasons[{{ $item->id }}]">
                                                                            <option value="">-- เลือกสาเหตุ --</option>
                                                                            <option value="ยืมไปแล้ว">ยืมไปแล้ว</option>
                                                                            <option value="หนังสืออยู่ระหว่างการซ่อม">หนังสืออยู่ระหว่างการซ่อม</option>
                                                                            <option value="หนังสือสำหรับใช้ในห้องสมุด">หนังสือสำหรับใช้ในห้องสมุด</option>
                                                                            <option value="หนังสือสงวน">หนังสือสงวน</option>
                                                                            <option value="หนังสืออยู่ระหว่างการจัดหาย">หนังสืออยู่ระหว่างการจัดหาย</option>
                                                                            <option value="other">อื่นๆ</option>
                                                                        </select>
                                                                        <input type="text" class="form-control form-control-sm item-note"
                                                                            id="item-note-{{ $item->id }}"
                                                                            name="item_notes[{{ $item->id }}]"
                                                                            placeholder="ระบุเหตุผล"
                                                                            style="display: none;">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- เพิ่มตัวเลือกสถานที่รับ -->
                                            @if ($notification->order->pickup_type == 'department')
                                                <div class="form-group mt-4">
                                                    <div class="alert alert-info">
                                                        <i class="fa fa-info-circle"></i> รายการนี้เป็นการรับที่หน่วยงาน: <strong>{{ $notification->order->pickup_location }}</strong>
                                                    </div>
                                                </div>
                                            @endif

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
                                                                    <span class="badge badge-success">ยืมได้</span>
                                                                @else
                                                                    <span class="badge badge-danger">ยืมไม่ได้</span>
                                                                    @if(isset($item->note))
                                                                        <div class="mt-2">
                                                                            <span class="reason-badge">{{ $item->note }}</span>
                                                                        </div>
                                                                    @endif
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
                                            <p class="tx-medium">สถานะตัวเล่มหนังสือ:</p>
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

                                    <!-- เพิ่มส่วนของสถานะการจัดส่ง -->
                                    @if ($notification->order->pickup_type == 'department')
                                        <div class="row mg-t-20">
                                            <div class="col-md-4">
                                                <p class="tx-medium">สถานะการจัดส่ง:</p>
                                            </div>
                                            <div class="col-md-8">
                                                @if (empty($notification->order->delivered_at))
                                                    <div class="d-flex align-items-center">
                                                        <span class="badge badge-warning mr-3">รอการจัดส่ง</span>
                                                        <form action="{{ route('order.update-delivery', $notification->order->id) }}" method="POST">
                                                            @csrf
                                                            <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('ยืนยันการจัดส่งแล้ว?')">
                                                                <i class="fa fa-paper-plane mr-1"></i> ยืนยันการจัดส่งแล้ว
                                                            </button>
                                                        </form>
                                                    </div>
                                                @else
                                                    <div>
                                                        <span class="badge badge-success">จัดส่งแล้ว</span>
                                                        <small class="ml-2">({{ $notification->order->delivered_at->format('d/m/Y H:i:s') }})</small>
                                                    </div>
                                                @endif
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
            /* เพิ่มเติมจาก CSS เดิม */
        .is-invalid {
            border-color: #dc3545 !important;
            padding-right: calc(1.5em + 0.75rem);
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        /* ปรับขนาด dropdown ให้พอดี */
        .item-reason {
            margin-bottom: 8px;
        }

        /* สไตล์สำหรับป้ายแสดงเหตุผลในส่วนที่อ่านอย่างเดียว */
        .reason-badge {
            display: inline-block;
            padding: 4px 8px;
            font-size: 12px;
            font-weight: normal;
            border-radius: 4px;
            background-color: #e9ecef;
            margin-bottom: 5px;
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

                    // ตรวจสอบการป้อนเหตุผลเมื่อเลือก "ไม่มีให้ยืม"
                    let valid = true;
                    $('.item-status').each(function() {
                        const itemId = this.id.replace('item-status-', '');

                        if ($(this).val() === 'unavailable') {
                            const reason = $(`#item-reason-${itemId}`).val();

                            if (!reason) {
                                valid = false;
                                $(`#item-reason-${itemId}`).addClass('is-invalid');
                            } else if (reason === 'other' && $(`#item-note-${itemId}`).val().trim() === '') {
                                valid = false;
                                $(`#item-note-${itemId}`).addClass('is-invalid');
                            }
                        }
                    });

                    if (!valid) {
                        e.preventDefault();
                        alert('กรุณาระบุสาเหตุที่ไม่มีให้ยืมให้ครบถ้วน');
                        return false;
                    }

                    return true;
                });

                // การทำงานของ dropdown สถานะ
                $('.item-status').on('change', function() {
                    const itemId = this.id.replace('item-status-', '');
                    const noteContainer = $(`#note-container-${itemId}`);
                    const reasonSelect = $(`#item-reason-${itemId}`);
                    const noteInput = $(`#item-note-${itemId}`);

                    if ($(this).val() === 'unavailable') {
                        noteContainer.show();
                        reasonSelect.show();

                        // ถ้าเคยเลือก other ไว้แล้ว ให้แสดง input
                        if (reasonSelect.val() === 'other') {
                            noteInput.show();
                            noteInput.prop('required', true);
                        } else {
                            noteInput.hide();
                            noteInput.prop('required', false);
                        }
                    } else {
                        noteContainer.hide();
                        reasonSelect.val('');
                        noteInput.val('');
                        noteInput.prop('required', false);
                    }
                });

                // การทำงานของ dropdown เหตุผล
                $('.item-reason').on('change', function() {
                    const itemId = this.id.replace('item-reason-', '');
                    const noteInput = $(`#item-note-${itemId}`);

                    if ($(this).val() === 'other') {
                        noteInput.show();
                        noteInput.prop('required', true);
                        noteInput.focus();
                    } else {
                        noteInput.hide();
                        noteInput.prop('required', false);
                    }

                    // Remove invalid class when selection changes
                    $(this).removeClass('is-invalid');
                    noteInput.removeClass('is-invalid');
                });
            }
        });
    </script>
@endsection
