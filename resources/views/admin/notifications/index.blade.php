{{-- @extends('admin.admin_master')
@section('admin')

@section('title')
รายการแจ้งเตือนทั้งหมด
@endsection

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
                        <form action="{{ route('notifications.index') }}" method="GET">
                            <select id="status-filter" name="status" class="form-control"
                                onchange="this.form.submit()">
                                <option value="">ทั้งหมด</option>
                                <option value="unread" {{ request('status') == 'unread' ? 'selected' : '' }}>
                                    ยังไม่ได้ยืนยัน</option>
                                <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>ยืนยันแล้ว
                                </option>
                            </select>
                        </form>
                    </div>
                </div>

                <table class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th>วันที่</th>
                            <th>ข้อความ</th>
                            <th>คณะ/หน่วยงาน</th>
                            <th>สถานะ</th>
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
                                <td colspan="6" class="text-center">ไม่มีการแจ้งเตือน</td>
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
@endsection --}}
