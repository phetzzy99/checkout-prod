@extends('admin.admin_master')
@section('admin')

@section('title')
แก้ไขข้อมูลเจ้าหน้าที่
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">
    <div class="sl-pagebody">
        <div class="row row-sm mg-t-5">
            <div class="col-8 mx-auto mg-t-20 mg-xl-t-0">
                <div class="card pd-20 pd-sm-25">
                    <h6 class="card-body-title">แก้ไขข้อมูลเจ้าหน้าที่</h6>

                    <div class="form-layout">
                        <div class="row mg-b-25">
                            <div class="col-lg-10">
                                <form method="POST" action="{{ route('staff.update') }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $staff->id }}">

                                    <div class="form-group">
                                        <label class="form-control-label">ชื่อเจ้าหน้าที่: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="name" value="{{ $staff->name }}" placeholder="ระบุชื่อเจ้าหน้าที่">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">ตำแหน่ง:</label>
                                        <input class="form-control" type="text" name="position" value="{{ $staff->position }}" placeholder="ระบุตำแหน่ง">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">แผนก/ฝ่าย:</label>
                                        <input class="form-control" type="text" name="department" value="{{ $staff->department }}" placeholder="ระบุแผนก/ฝ่าย">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-control-label">สถานะ: <span class="tx-danger">*</span></label>
                                        <select class="form-control" name="status">
                                            <option value="active" {{ $staff->status == 'active' ? 'selected' : '' }}>ใช้งาน</option>
                                            <option value="inactive" {{ $staff->status == 'inactive' ? 'selected' : '' }}>ไม่ใช้งาน</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mg-t-30">
                                        <button type="submit" class="btn btn-info mg-r-5">
                                            <i class="fa fa-save"></i> บันทึกข้อมูล
                                        </button>
                                        <a href="{{ route('all.staff') }}" class="btn btn-secondary">
                                            <i class="fa fa-arrow-left"></i> กลับ
                                        </a>
                                    </div>
                                </form>
                            </div><!-- col-4 -->
                        </div><!-- row -->
                    </div><!-- form-layout -->
                </div><!-- card -->
            </div><!-- col-8 -->
        </div><!-- row -->
    </div><!-- sl-pagebody -->

    @include('admin.body.footer')
</div><!-- sl-mainpanel -->

@endsection
