@extends('admin.admin_master')
@section('admin')

@section('title')
จัดการข้อมูลเจ้าหน้าที่
@endsection

@php
    $month = date('F');
    $day = date('d');
    $year = date('Y');
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row row-sm mg-t-5">
            <div class="col-xl-8">
                <div class="card overflow-hidden">
                    <div class="card-header bg-transparent pd-y-20 d-sm-flex align-items-center justify-content-between">
                        <div class="mg-b-20 mg-sm-b-0">
                            <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">รายการเจ้าหน้าที่</h6>
                            <span class="d-block tx-12">{{$month}} {{$day}}, {{$year}}</span>
                        </div>
                    </div><!-- card-header -->

                    <div class="card pd-20 pd-sm-20">
                        <!-- เพิ่มในส่วน header ของตาราง -->
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <select id="staff-filter" class="form-control">
                                    <option value="all">ทั้งหมด</option>
                                    <option value="active">ใช้งาน</option>
                                    <option value="inactive">ไม่ใช้งาน</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-wrapper">
                            <table id="datatable1" class="table display responsive nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-40p">ชื่อเจ้าหน้าที่</th>
                                        <th class="wd-20p">ตำแหน่ง</th>
                                        <th class="wd-20p">แผนก</th>
                                        <th class="wd-10p">สถานะ</th>
                                        <th class="wd-10p">จำนวนการยืนยัน</th>
                                        <th class="wd-10p">การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($staffs as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->position ?? '-' }}</td>
                                        <td>{{ $item->department ?? '-' }}</td>
                                        <td>
                                            @if($item->status == 'active')
                                                <span class="badge badge-success">ใช้งาน</span>
                                            @else
                                                <span class="badge badge-danger">ไม่ใช้งาน</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->confirmations_count }}</td>
                                        <td>
                                            <a href="{{ route('staff.edit', $item->id) }}" class="btn btn-info btn-sm" title="แก้ไขข้อมูล">
                                                <i class="fa fa-pencil"></i>
                                            </a>

                                            <a href="{{ route('staff.delete', $item->id) }}" class="btn btn-danger btn-sm" title="ลบข้อมูล"
                                               onclick="return confirm('ต้องการลบข้อมูลนี้ใช่หรือไม่?')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- table-wrapper -->
                    </div><!-- card -->
                </div><!-- card -->
            </div><!-- col-8 -->

            <div class="col-4 mg-t-20 mg-xl-t-0">
                <div class="card pd-20 pd-sm-25">
                    <h6 class="card-body-title">เพิ่มข้อมูลเจ้าหน้าที่</h6>

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-12">
                                <form method="POST" action="{{ route('staff.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">ชื่อเจ้าหน้าที่: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" placeholder="ระบุชื่อเจ้าหน้าที่">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">ตำแหน่ง:</label>
                                        <input class="form-control" type="text" name="position" placeholder="ระบุตำแหน่ง">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">แผนก/ฝ่าย:</label>
                                        <input class="form-control" type="text" name="department" placeholder="ระบุแผนก/ฝ่าย">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">สถานะ: <span class="tx-danger">*</span></label>
                                        <select class="form-control" name="status">
                                            <option value="active">ใช้งาน</option>
                                            <option value="inactive">ไม่ใช้งาน</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="text-xl-right">
                                        <button type="submit" class="btn btn-info mg-r-5">
                                            <i class="fa fa-plus-circle"></i> เพิ่มข้อมูล
                                        </button>
                                    </div>
                                </form>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                    </div><!-- form-layout -->
                </div><!-- card -->
            </div><!-- col-3 -->
        </div><!-- row -->
    </div><!-- sl-pagebody -->

    @include('admin.body.footer')
</div><!-- sl-mainpanel -->

<script type="text/javascript">
    $(document).ready(function(){
        'use strict';

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

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    });

    // เพิ่มฟังก์ชันค้นหาและกรองข้อมูล
    $('#staff-filter').on('change', function() {
        var status = $(this).val();
        var table = $('#datatable1').DataTable();

        if (status === 'all') {
            table.column(3).search('').draw();
        } else {
            table.column(3).search(status === 'active' ? 'ใช้งาน' : 'ไม่ใช้งาน').draw();
        }
    });

</script>

@endsection
