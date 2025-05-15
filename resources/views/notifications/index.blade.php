@extends('frontend.main_master')
@section('content')
    <div class="sl-mainpanel">
        <div class="sl-pagebody">
            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title">รายการแจ้งเตือนทั้งหมด</h6>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-wrapper">
                    <div class="text-right mb-4">
                        <a href="{{ route('notifications.mark-all-read') }}" class="btn btn-info"
                            onclick="return confirm('ต้องการทำเครื่องหมายว่าอ่านทั้งหมดแล้วใช่หรือไม่?')">
                            <i class="fa fa-check-square-o"></i> อ่านทั้งหมดแล้ว
                        </a>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-3">
                            <form action="{{ route('notifications.index') }}" method="GET" id="status-filter-form">
                                <select id="status-filter" name="status" class="form-control" onchange="document.getElementById('status-filter-form').submit()">
                                    <option value="">ทั้งหมด</option>
                                    <option value="unread" {{ request('status') == 'unread' ? 'selected' : '' }}>
                                        ยังไม่ได้ยืนยัน</option>
                                    <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>ยืนยันแล้ว
                                    </option>
                                    <option value="waiting_delivery" {{ request('status') == 'waiting_delivery' ? 'selected' : '' }}>
                                        รอการจัดส่ง</option>
                                </select>
                            </form>
                        </div>
                    </div>

                    <div class="alert alert-info alert-dismissible fade show mb-3" role="alert">
                        <strong><i class="fa fa-filter mr-2"></i>สถานะการกรอง:</strong>
                        @if(request('status') == 'unread')
                            กำลังแสดงรายการที่ <span class="badge badge-danger">ยังไม่ได้ยืนยัน</span> เท่านั้น
                        @elseif(request('status') == 'read')
                            กำลังแสดงรายการที่ <span class="badge badge-success">ยืนยันแล้ว</span> เท่านั้น
                        @elseif(request('status') == 'waiting_delivery')
                            กำลังแสดงรายการที่ <span class="badge badge-warning">รอการจัดส่ง</span> เท่านั้น
                        @else
                            กำลังแสดงรายการทั้งหมด
                        @endif
                        <a href="{{ route('notifications.index') }}" class="btn btn-sm btn-outline-secondary ml-2">ล้างตัวกรอง</a>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <table class="table display responsive nowrap">
                        <thead>
                            <tr>
                                <th>วันที่</th>
                                <th>ข้อความ</th>
                                <th>คณะ/หน่วยงาน</th>
                                <th>สถานะตัวเล่มหนังสือ</th>
                                <th>สถานะการยืม</th>
                                <th>เจ้าหน้าที่ผู้ยืนยัน</th>
                                <th>การจัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($notifications as $notification)
                                <tr class="{{ $notification->is_read ? 'read' : 'unread' }}">
                                    <td>{{ $notification->created_at->format('d/m/Y H:i') }}</td>
                                    <td>{{ $notification->message }}</td>
                                    <td>{{ $notification->order->faculty->faculty_name_th ?? '-' }}</td>
                                    <td>
                                        @if ($notification->is_read)
                                            <span class="badge badge-success">ยืนยันแล้ว</span>
                                        @else
                                            <span class="badge badge-danger">รอยืนยัน</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($notification->order->status == 'success')
                                            @if ($notification->order->pickup_type == 'department')
                                                @if (empty($notification->order->delivered_at))
                                                    <span class="badge badge-warning">รอการจัดส่ง</span>
                                                @else
                                                    <span class="badge badge-success">จัดส่งแล้ว</span>
                                                @endif
                                            @else
                                                <span class="badge badge-success">สำเร็จ</span>
                                            @endif
                                        @else
                                            <span class="badge badge-warning">รออนุมัติ</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($notification->is_read && $notification->staff)
                                            {{ $notification->staff->name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('notifications.detail', $notification->id) }}"
                                            class="btn btn-info btn-sm">
                                            <i class="fa fa-eye"></i> ดูรายละเอียด
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">ไม่มีการแจ้งเตือน</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $notifications->appends(request()->query())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .unread {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .unread td:first-child::before {
            content: "•";
            color: #dc3545;
            font-size: 24px;
            margin-right: 8px;
            position: relative;
            top: 2px;
        }

        .pagination {
            justify-content: center;
            margin-top: 20px;
        }

        .page-item:first-child .page-link,
        .page-item:last-child .page-link {
            border-radius: 20px;
        }

        .page-link {
            color: #333;
            border: none;
            padding: 0.5rem 0.75rem;
            margin: 0 3px;
            border-radius: 20px;
        }

        .page-item.active .page-link {
            background-color: #007bff;
            border-color: #007bff;
        }

        .page-link:hover {
            background-color: #f8f9fa;
            color: #0056b3;
        }

        .unread {
        background-color: #f8f9fa;
        font-weight: bold;
        }

        .unread td:first-child::before {
            content: "•";
            color: #dc3545;
            font-size: 24px;
            margin-right: 8px;
            position: relative;
            top: 2px;
        }

        /* เพิ่มหรือปรับปรุง style สำหรับ badge */
        .badge {
            padding: 8px 12px;
            font-size: 12px;
            border-radius: 4px;
            display: inline-block;
            font-weight: 500;
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

        #status-filter {
            border-radius: 4px;
            border: 1px solid #ced4da;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        #status-filter:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>
@endsection
