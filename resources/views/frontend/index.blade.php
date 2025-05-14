@extends('frontend.main_master')
@section('content')
@section('title')
    ระบบยืมออนไลน์ Information Checkout Online
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

<!-- Toastr -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<!-- กำหนดค่าตั้งต้นของ Toastr -->
<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000"
    };
</script>

<style type="text/css">
    #loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.75);
        z-index: 10000;
    }
</style>

<div class="sl-mainpanel">
    {{-- <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Starlight</a>
      <a class="breadcrumb-item" href="index.html">Forms</a>
      <span class="breadcrumb-item active">Form Layouts</span>
    </nav> --}}

    <div class="sl-pagebody">

        <div class="sl-page-title">
            <h5>Information Checkout Online <b style="color:red">(สำหรับยืมหนังสือแบบออนไลน์เท่านั้น <u
                        style="font-size:30px">ไม่สามารถใช้งานยืมต่อหนังสือได้!</u>)</b></h5>
            <p> for COVID-19 Situation.</p>
        </div><!-- sl-page-title -->


        {{-- <div class="row mg-t-5">
        <div class="col">
          <div class="text-xl-right">
            <button name="add" id="add" class="btn btn-primary mg-r-5">
              <i class="icon ion-plus-circled"> </i>
                Add Data
            </button>
          </div>
        </div> --}}

        @if (Session::has('success'))
            <div class="alert alert-success">

                {{-- <p>{{ Session::get('success') }}</p> --}}

                <div class="alert alert-success" role="alert">
                    <div class="d-sm-flex align-items-center justify-content-start">
                        <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                        <div class="mg-t-0 mg-sm-t-0">
                            <h5 class="mg-b-2 tx-success">รายการยืมออนไลน์ สำเร็จ</h5>
                            <p class="mg-b-0 tx-gray">ระบบได้ส่งรายการยืมออนไลน์ไปยังเจ้าหน้าที่เรียบร้อยแล้ว
                                โปรดตรวจสอบรายการยืมได้จากอีเมล์
                                หากไม่พบอีเมล์ โปรดตรวจสอบเมนูจดหมายขยะ (Junk Mail) ตามที่สมาชิกได้ยืนยันในระบบ</p>
                        </div>
                    </div><!-- d-flex -->
                </div>

            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <div class="d-sm-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-close alert-icon tx-52 mg-r-20 tx-danger"></i>
                    <div class="mg-t-0 mg-sm-t-0">
                        <h5 class="mg-b-2 tx-danger">กรุณากรอกข้อมูลรายการตามแบบฟอร์มที่กำหนดให้สมบูรณ์</h5>
                        <p class="mg-b-0 tx-gray">กรอกข้อมูลให้สมบูรณ์ตามเครื่องหมาย (*)</p>
                    </div>
                </div><!-- d-flex -->
            </div>

            {{-- <div class="alert alert-danger" role="alert">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div> --}}
        @endif

        {{-- <form method="POST" action="{{ route('order.store') }}">
        @csrf --}}

        <form action="{{ route('order.store') }}" method="POST">
            @csrf

            <div class="card pd-20 pd-sm-40 mg-t-10">

                <h6 class="card-body-title">ข้อมูลผู้ขอใช้บริการ (Patron Informations)</h6>
                <p class="mg-b-20 mg-sm-b-30">
                    ข้อมูลผู้ใช้บริการนี้คือข้อมูลที่ทางห้องสมุดได้ทำการบันทึกจะใช้สำหรับระบบบริการยืมออนไลน์นี้เท่านั้น
                </p>

                <div class="form-layout">
                    <div class="row mg-b-25">

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">รหัสสมาชิก (Student ID & ID-Card): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="patronid" placeholder="18401xxxxxxxx"
                                    value="{{ old('patronid') }}">
                                @error('patronid')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">ชื่อ (Firstname): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="firstname"
                                    placeholder="Enter firstname" value="{{ old('firstname') }}">
                                @error('firstname')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">นามสกุล (Lastname): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="lastname" placeholder="Enter lastname"
                                    value="{{ old('lastname') }}">
                                @error('lastname')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">เบอร์โทรฯ (Phone): <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="phone" placeholder="088xxxxxxx"
                                    value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email"
                                    placeholder="student@sru.ac.th" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">หน่วยงาน/คณะ: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" name="faculty_id">
                                    <option value="" selected="" disabled="">เลือก: หน่วยงาน/คณะ</option>

                                    @foreach ($faculties as $item)
                                        <option value="{{ $item->id }}">{{ $item->faculty_name_th }}</option>
                                    @endforeach

                                </select>
                                @error('faculty_id')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">ประเภทสมาชิก: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" name="patrontype_id">
                                    <option value="" selected="" disabled="">เลือก: ประเภทสมาชิก</option>

                                    @foreach ($patrontype as $item)
                                        <option value="{{ $item->id }}">{{ $item->patron_type_name }}</option>
                                    @endforeach

                                </select>
                                @error('patrontype_id')
                                    <span class="text-danger">
                                        <i class="fa fa-ban"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div><!-- col-4 -->

                    </div><!-- row -->

                    {{-- <div class="form-layout-footer">
            <button class="btn btn-info mg-r-5">Submit Form</button>
            <button class="btn btn-secondary">Cancel</button>
          </div><!-- form-layout-footer --> --}}

                </div><!-- form-layout -->
            </div><!-- card -->

            <div class="card pd-20 pd-sm-40 mg-t-20">
                <h6 class="card-body-title">ข้อมูลการรับหนังสือ (Pickup Information)</h6>
                <p class="mg-b-20 mg-sm-b-30">
                    กรุณาเลือกสถานที่รับหนังสือที่ต้องการ<br>
                    <span style="font-size: 1.2em; font-weight: bold; color: red;">** บุ๊คเดลิเวอร์รี่ ส่งวันพุธ เวลา 13.00-15.00 น. **</span>
                </p>

                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">สถานที่รับหนังสือ: <span class="tx-danger">*</span></label>
                                <div class="mg-t-10">
                                    <div class="custom-control custom-radio mb-2">
                                        <input type="radio" id="pickup_library" name="pickup_type" value="library" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="pickup_library">รับที่ห้องสมุด</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="pickup_department" name="pickup_type" value="department" class="custom-control-input">
                                        <label class="custom-control-label" for="pickup_department">รับที่หน่วยงาน</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-12 -->

                        <div class="col-lg-12" id="pickup_location_container" style="display: none;">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">ระบุสถานที่รับ: <span class="tx-danger">*</span></label>
                                <textarea class="form-control" name="pickup_location" id="pickup_location" rows="3" placeholder="ระบุสถานที่รับและรายละเอียดเพิ่มเติม เช่น อาคาร ชั้น ห้อง เป็นต้น"></textarea>
                                <div class="invalid-feedback">กรุณาระบุสถานที่รับหนังสือ</div>
                            </div>
                        </div><!-- col-12 -->
                    </div><!-- row -->
                </div><!-- form-layout -->
            </div><!-- card -->



            {{-- Add information data --}}



            <div class="card pd-20 pd-sm-30 mg-t-40">

                <div class="card pd-20 mg-t-0 bd rounded">

                    <div class="mg-t-0"><a href="#"
                            class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10">
                            <div> 1 </div>
                        </a></div>

                    <div class="row mg-t-20">
                        <div class="col">
                            <div class="text-xl-right">
                                <button type="button" name="add" id="dynamic-ar" class="btn btn-info"><i
                                        class="icon ion-plus-circled"> </i>เพิ่มรายการยืม...</button>
                                {{-- #Button add item --}}
                                {{-- <a href="#section" name="add" id="dynamic-ar" class="btn btn-info"><i class="icon ion-plus-circled"> </i>เพิ่มรายการยืม...</a> --}}
                            </div>
                        </div><!-- col end -->
                    </div> <!-- row end -->

                    <!-- เพิ่ม CSS สำหรับปุ่ม -->
                    <style>
                        .btn-with-icon {
                            transition: all 0.3s ease;
                        }
                        .btn-with-icon:hover {
                            transform: translateY(-2px);
                            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                        }
                        .btn-text {
                            margin-left: 5px;
                        }

                        /* สำหรับแถวที่เพิ่มใหม่ */
                        .new-row-animation {
                            animation: highlight 2s ease;
                        }

                        /* สำหรับปุ่มลบรายการ */
                        .remove-input-field {
                            display: flex;
                            align-items: center;
                            justify-content: center;
                            border-radius: 4px;
                            transition: all 0.3s ease;
                        }
                        .remove-input-field:hover {
                            background-color: #dc3545;
                            color: white;
                        }
                        .remove-input-field i {
                            margin-right: 5px;
                        }

                        @keyframes highlight {
                            0% { background-color: rgba(0, 123, 255, 0.1); }
                            100% { background-color: transparent; }
                        }

                        /* เพิ่มสไตล์สำหรับฟิลด์ที่ไม่ถูกต้อง */
                        .required-field {
                            border-color: #dc3545 !important;
                            padding-right: calc(1.5em + 0.75rem) !important;
                            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") !important;
                            background-repeat: no-repeat !important;
                            background-position: right calc(0.375em + 0.1875rem) center !important;
                            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem) !important;
                            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out !important;
                        }

                        .required-field:focus {
                            border-color: #dc3545 !important;
                            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
                        }
                    </style>

                    <h6 class="card-body-title mg-t-20">รายละเอียดทรัพยากร</h6>
                    <p class="mg-b-20 mg-sm-b-30">ข้อมูลรายละเอียดสำหรับการยืมทรัพยากร
                        กรอกข้อมูลให้สมบูรณ์ตามเครื่องหมาย (*)</p>


                        <table class="table table-bordered" id="dynamicAddRemove">
                            <tr style="background: white">
                                <td class="card pd-20 mg-t-10">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group form-group-lg">
                                                <label class="form-control-label">ชื่อเรื่อง (Title): <span class="tx-danger">*</span></label>
                                                <div class="mg-t-10 mg-sm-t-0">
                                                    <input type="text" name="addMoreInputFields[1][subject]" placeholder="Enter title" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <div class="col-lg-8">
                                            <div class="form-group form-group-lg">
                                                <label class="form-control-label">ผู้แต่ง (Author): <span class="tx-danger">*</span></label>
                                                <div class="mg-t-10 mg-sm-t-0">
                                                    <input type="text" name="addMoreInputFields[1][author]" placeholder="Enter author" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mg-t-20">
                                        <div class="col-lg-8">
                                            <div class="form-group form-group-lg">
                                                <label class="form-control-label">เลขเรียกหนังสือ (Call Number): <span class="tx-danger">*</span></label>
                                                <div class="mg-t-10 mg-sm-t-0">
                                                    <input type="text" name="addMoreInputFields[1][callnum]" placeholder="Enter call number" class="form-control" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                </div>

                <div class="row mg-t-30">
                    <div class="col">
                        <div class="text-xl-left">
                            <button type="button" class="btn btn-teal btn-block" id="showConfirmationModal"><i class="fa fa-check-circle mg-r-10"></i>ตรวจสอบและยืนยันข้อมูล</button>
                            {{-- <button class="btn btn-danger">Cancel</button> --}}
                        </div>
                    </div><!-- col end -->
                </div> <!-- row end -->

        </form>

    </div><!-- sl-pagebody -->
    @include('frontend.body.footer')

    <!-- CONFIRMATION MODAL -->
    <div id="confirmationModal" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content bd-0 tx-14">
                <div class="modal-header pd-y-20 pd-x-25">
                    <h6 class="tx-16 mg-b-0 tx-uppercase tx-inverse tx-bold">ยืนยันข้อมูลการยืม</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-25">
                    <h5 class="lh-3 mg-b-20 tx-inverse">กรุณาตรวจสอบข้อมูลการติดต่อให้ถูกต้องก่อนยืนยัน</h5>

                    <div class="alert alert-info mg-b-20">
                        <p class="mb-0">ข้อมูลการติดต่อที่ถูกต้องมีความสำคัญมาก เนื่องจากทางห้องสมุดจะใช้ข้อมูลนี้ในการติดต่อกลับเพื่อยืนยันการยืมและแจ้งความคืบหน้า</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label tx-semibold">ชื่อ-นามสกุล:</label>
                                <p class="form-control-static" id="confirm_fullname">-</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label tx-semibold">รหัสสมาชิก:</label>
                                <p class="form-control-static" id="confirm_patronid">-</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label tx-semibold">อีเมล:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control form-control-lg" id="confirm_email" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="edit_email_btn">
                                            <i class="fa fa-pencil"></i> แก้ไข
                                        </button>
                                    </div>
                                </div>
                                <small class="form-text tx-muted">หากข้อมูลไม่ถูกต้อง กรุณาคลิกปุ่มแก้ไขเพื่อเปลี่ยนแปลง</small>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label tx-semibold">เบอร์โทรศัพท์:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" id="confirm_phone" readonly>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button" id="edit_phone_btn">
                                            <i class="fa fa-pencil"></i> แก้ไข
                                        </button>
                                    </div>
                                </div>
                                <small class="form-text tx-muted">หากข้อมูลไม่ถูกต้อง กรุณาคลิกปุ่มแก้ไขเพื่อเปลี่ยนแปลง</small>
                            </div>
                        </div>
                    </div>

                    <div class="row mg-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label tx-semibold">จำนวนรายการยืม:</label>
                                <p class="form-control-static" id="confirm_total_items"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-control-label tx-semibold">สถานที่รับหนังสือ:</label>
                                <p class="form-control-static" id="confirm_pickup_location"></p>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning mg-t-20" id="edit_warning" style="display: none;">
                        <i class="fa fa-exclamation-triangle mg-r-10"></i> คุณกำลังแก้ไขข้อมูลการติดต่อ กรุณาตรวจสอบความถูกต้องก่อนยืนยัน
                    </div>

                    <div class="custom-control custom-checkbox mg-t-20">
                        <input type="checkbox" class="custom-control-input" id="confirm_checkbox">
                        <label class="custom-control-label" for="confirm_checkbox">
                            ข้าพเจ้าขอยืนยันว่าข้อมูลทั้งหมดถูกต้องและเป็นความจริงทุกประการ
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="confirm_submit_btn" class="btn btn-primary" disabled>
                        <i class="fa fa-paper-plane mg-r-10"></i> ยืนยันและส่งข้อมูล
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fa fa-times mg-r-10"></i> ยกเลิก
                    </button>
                </div>
            </div>
        </div>
    </div>
</div><!-- sl-mainpanel -->

<div id="loader" class="loader-overlay">
    <div class="loader-content">
        <div class="spinner"></div>
        <div class="percentage-container">
            <span id="percentage-counter">0%</span>
        </div>
        <p class="loading-text">กำลังตรวจสอบ...</p>
    </div>
</div>


<!-- BASIC MODAL -->
<div id="modaldemo1" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
            <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้บริการ
                    แจ้งวันเวลาให้บริการใหม่สำหรับระบบยืมออนไลน์</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <h4 class="lh-3 mg-b-20">เงื่อนไขการใช้บริการ</h4>
                <p class="mg-b-5" style="color:red">1. ผู้ใช้บริการสามารถส่งคำขอยืมหนังสือได้ใน <b><u>วันจันทร์ ถึง
                            วันศุกร์ เวลา 08.30 น. - 16.00 น.</u></b></p>
                <br>
                <h4 class="lh-3 mg-b-20">ขั้นตอนการใช้บริการ</h4>
                <p class="mg-b-5">1. ผู้ใช้บริการสืบค้นข้อมูลทรัพยากรสารสนเทศของหอสมุดกลางจากระบบสืบค้น OPAC ที่ : <a
                        href="https://opac.sru.ac.th" target="_blank" class="tx-inverse hover-primary">
                        คลิกที่นี่</a></p>
                <p class="mg-b-5">2. ผู้ใช้บริการกรอกรายละเอียดในแบบฟอร์มการยืมให้ครบถ้วน</p>
                <p class="mg-b-5">3. เจ้าหน้าที่ตรวจสอบและติดต่อกลับทางโทรศัพท์เพื่อยืนยันคำขอยืม</p>
                <p class="mg-b-5">4.ผู้ใช้บริการรับหนังสือตามวันเวลาที่นัดหมายบริเวณหน้าหอสมุดกลาง</p>
            </div>
            {{-- <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">ขั้นตอนการใช้บริการ</h4>
            <p class="mg-b-5">1. ผู้ใช้บริการสืบค้นข้อมูลทรัพยากรสารสนเทศของหอสมุดกลางจากระบบสืบค้น OPAC ที่ : <a href="https://opac.sru.ac.th" target="_blank" class="tx-inverse hover-primary"> คลิกที่นี่</a></p>
            <p class="mg-b-5">2. ผู้ใช้บริการกรอกรายละเอียดในแบบฟอร์มการยืมให้ครบถ้วน</p>
            <p class="mg-b-5">3. เจ้าหน้าที่ตรวจสอบและติดต่อกลับทางโทรศัพท์เพื่อยืนยันคำขอยืม</p>
            <p class="mg-b-5">4.ผู้ใช้บริการรับหนังสือตามวันเวลาที่นัดหมายบริเวณหน้าหอสมุดกลาง</p>
          </div> --}}
            <div class="mb-3">
                <img width="650px"
                    src="https://library.sru.ac.th/wp-content/uploads/sites/29/2022/09/notics-cir-online.png"
                    alt="">
            </div>
            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
                <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i
                        class="icon ion-close"> </i> ปิดหน้าต่างนี้</button>
            </div>
        </div>
    </div>
    <!-- modal-dialog -->
</div>
<!-- modal -->


<!-- NOTICS MODAL -->
{{-- <div id="modaldemo1" class="modal fade">
          <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
            <div class="modal-content bd-0 tx-14">
              <div class="modal-header pd-y-20 pd-x-25">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้บริการ  ปิดบริการระบบยืมออนไลน์ (ชั่วคราว) เพื่อปรับปรุงระบบ </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body pd-25">
                <h4 class="lh-3 mg-b-20">สามารถใช้บริการได้วันพุธที่ 11 มกราคม 2566</h4>
                <h4 class="lh-3 mg-b-20">ขออภัยในความไม่สะดวกในครั้งนี้</h4>
              </div>
              <div class="modal-footer"> --}}
{{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
{{-- <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i class="icon ion-close"> </i> ปิดหน้าต่างนี้</button> --}}
{{-- </div>
            </div>
          </div>
          <!-- modal-dialog -->
        </div>
        <!-- modal --> --}}



<!-- BASIC MODAL ปิดชั่วคราว -->
{{-- <div id="modaldemo1" class="modal fade">
      <div class="modal-dialog modal-lg modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">แจ้งผู้ใช้บริการ แจ้งปิดบริการเนื่องในเทศกาลสงกรานต์</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">ประกาศ แจ้งปิดบริการเนื่องในเทศกาลสงกรานต์</h4>
            <p class="mg-b-5"><h5>📍วันที่ 12 เม.ย. 2565 : บุคลากรเข้าร่วมกิจกรรมของมหาวิทยาลัยฯ</h5></p>
            <p class="mg-b-5"><h5>📍วันที่ 13 - 17 เม.ย. 2565 : หยุดเทศกาลสงกรานต์</h5></p>
            <p class="mg-b-5"><h5>หอสมุด อภัยในความไม่สะดวกมา ณ ที่นี้</h5></p>
          </div>
          <hr>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20">การกลับมาให้บริการ</h4>
            <p class="mg-b-5"><h5>ทางหอสมุดจะกลับมาเปิดให้บริการรวมถึงระบบยืมออนไลน์ใหม่</h5></p>
            <p class="mg-b-5"><h5>ในวันจันทร์ที่ 18 เม.ย. 2565</h5></p>
          </div> --}}
{{-- <div class="modal-footer"> --}}
{{-- <button type="button" class="btn btn-info pd-x-20">Save changes</button> --}}
{{-- <button type="button" class="btn btn-danger pd-x-20" data-dismiss="modal"><i class="icon ion-close"> </i> ปิดหน้าต่างนี้</button> --}}
{{-- </div> --}}
{{-- </div> --}}
{{-- </div><!-- modal-dialog --> --}}
{{-- </div><!-- modal --> --}}



<script type="text/javascript">
    $(document).ready(function() {
        var i = 1;

        // ปรับปรุงฟังก์ชันตรวจสอบรายการยืม
        function validateCurrentItems() {
            let isValid = true;
            let focusSet = false;

            $('table#dynamicAddRemove tr').each(function(index) {
                // ข้ามการตรวจสอบหัวตาราง (ถ้ามี)
                if (index === 0 && $(this).find('th').length > 0) {
                    return true; // ข้ามไปรายการถัดไป
                }

                $(this).find('input[required]').each(function() {
                    if ($(this).val().trim() === '') {
                        $(this).addClass('required-field');
                        if (!focusSet) {
                            $(this).focus();
                            focusSet = true;
                        }
                        isValid = false;
                    } else {
                        $(this).removeClass('required-field');
                    }
                });
            });

            if (!isValid) {
                // เลื่อนไปที่รายการที่มีปัญหา
                if (focusSet) {
                    $('html, body').animate({
                        scrollTop: $('.required-field:first').offset().top - 100
                    }, 500);
                }
            }

            return isValid;
        }

        // เพิ่มในวันที่ 14/5/2025
        // แสดง/ซ่อนช่องกรอกสถานที่รับตามการเลือก
        $('input[name="pickup_type"]').on('change', function() {
            if ($(this).val() === 'department') {
                $('#pickup_location_container').slideDown(300);
                $('#pickup_location').prop('required', true);
            } else {
                $('#pickup_location_container').slideUp(300);
                $('#pickup_location').prop('required', false);
            }
        });

        // เพิ่มการตรวจสอบการกรอกข้อมูลสถานที่รับเมื่อส่งฟอร์ม
        $('form').submit(function(e) {
            if ($('input[name="pickup_type"]:checked').val() === 'department') {
                if ($('#pickup_location').val().trim() === '') {
                    e.preventDefault();
                    $('#pickup_location').addClass('is-invalid');
                    $('html, body').animate({
                        scrollTop: $('#pickup_location_container').offset().top - 100
                    }, 300);
                    return false;
                } else {
                    $('#pickup_location').removeClass('is-invalid');
                }
            }
            // ยังมีการตรวจสอบอื่นๆ ในฟอร์มให้ทำงานต่อไป
        });

        //เพิ่มในวันที่ 14/5/2025
        // การจัดการการยืนยันข้อมูลก่อนส่งฟอร์ม
        $("#showConfirmationModal").click(function(e) {
            e.preventDefault();

            // ตรวจสอบข้อมูลในฟอร์มก่อนแสดง modal
            let isFormValid = true;
            let focusSet = false;

            // ตรวจสอบข้อมูลพื้นฐานที่จำเป็น
            $('input[required], select[required], textarea[required]').each(function() {
                if ($(this).val().trim() === '') {
                    $(this).addClass('is-invalid');
                    if (!focusSet) {
                        $(this).focus();
                        focusSet = true;
                    }
                    isFormValid = false;
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            // ตรวจสอบรายการยืม
            if (!validateCurrentItems()) {
                isFormValid = false;
            }

            // ตรวจสอบสถานที่รับ
            if ($('input[name="pickup_type"]:checked').val() === 'department' && $('#pickup_location').val().trim() === '') {
                $('#pickup_location').addClass('is-invalid');
                if (!focusSet) {
                    $('#pickup_location').focus();
                    focusSet = true;
                }
                isFormValid = false;
            }

            if (!isFormValid) {
                // แสดงแจ้งเตือนว่าต้องกรอกข้อมูลให้ครบก่อน
                Swal.fire({
                    title: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                    text: 'โปรดกรอกข้อมูลที่จำเป็นทั้งหมดก่อนดำเนินการต่อ',
                    icon: 'warning',
                    confirmButtonText: 'เข้าใจแล้ว'
                });
                return;
            }

            // กำหนดค่าใน modal - แก้ไขการดึงค่าให้ถูกต้อง
            let firstName = $('input[name="firstname"]').val() || '';
            let lastName = $('input[name="lastname"]').val() || '';
            let patronId = $('input[name="patronid"]').val() || '';
            let originalEmail = $('input[name="email"]').val() || '';
            let originalPhone = $('input[name="phone"]').val() || '';
            let totalItems = $('#dynamicAddRemove tr').length;
            let pickupType = $('input[name="pickup_type"]:checked').val() || 'library';
            let pickupLocation = (pickupType === 'library') ? 'รับที่ห้องสมุด' : 'รับที่หน่วยงาน: ' + $('#pickup_location').val();

            // เพิ่มหลังจากกำหนดค่าใน modal แล้ว
            // ตรวจสอบว่าข้อมูลสำคัญมีการแสดงผลหรือไม่
            if (!firstName && !lastName) {
                // ถ้าไม่มีชื่อและนามสกุล ให้แสดงข้อความแจ้งเตือน
                Swal.fire({
                    title: 'ไม่สามารถแสดงข้อมูลได้',
                    text: 'ไม่พบข้อมูลชื่อ-นามสกุล กรุณาตรวจสอบการกรอกข้อมูลในฟอร์ม',
                    icon: 'error',
                    confirmButtonText: 'ตกลง'
                });

                console.error('ไม่พบข้อมูลชื่อ-นามสกุล');
                console.log('Form elements:', $('form').serialize());

                // ยกเลิกการแสดง modal
                return;
            }

            // ตรวจสอบว่าข้อมูลอีเมลและเบอร์โทรมีการแสดงผลหรือไม่
            if (!originalEmail) {
                console.warn('ไม่พบข้อมูลอีเมล');
            }
            if (!originalPhone) {
                console.warn('ไม่พบข้อมูลเบอร์โทรศัพท์');
            }

            // แสดงข้อมูลในฟอร์ม - เพิ่ม console.log เพื่อดีบัก
            console.log('FirstName:', firstName);
            console.log('LastName:', lastName);
            console.log('PatronID:', patronId);
            console.log('Email:', originalEmail);
            console.log('Phone:', originalPhone);

            // แสดงข้อมูลในฟอร์ม
            $('#confirm_fullname').text((firstName || '-') + ' ' + (lastName || '-'));
            $('#confirm_patronid').text(patronId || '-');
            $('#confirm_email').val(originalEmail || '');
            $('#confirm_phone').val(originalPhone || '');
            $('#confirm_total_items').text((totalItems || 0) + ' รายการ');
            $('#confirm_pickup_location').text(pickupLocation || 'รับที่ห้องสมุด');

            // ล้างค่าในฟิลด์ยืนยัน
            $('#confirm_checkbox').prop('checked', false);
            $('#confirm_submit_btn').prop('disabled', true);
            $('#edit_warning').hide();

            // ตั้งค่าให้ฟิลด์เป็น readonly เริ่มต้น
            $('#confirm_email, #confirm_phone').prop('readonly', true);

            // แสดง modal
            $('#confirmationModal').modal('show');

            // รีเซ็ตปุ่มแก้ไข
            $('#edit_email_btn, #edit_phone_btn').html('<i class="fa fa-pencil"></i> แก้ไข');

            // ยกเลิกการผูก event เดิมเพื่อป้องกันการทำงานซ้ำซ้อน
            $('#edit_email_btn, #edit_phone_btn').off('click');

            // จัดการการแก้ไขอีเมล
            $('#edit_email_btn').on('click', function() {
                const $emailField = $('#confirm_email');
                if ($emailField.prop('readonly')) {
                    $emailField.prop('readonly', false).focus();
                    $(this).html('<i class="fa fa-check"></i> บันทึก');
                    $('#edit_warning').show();
                } else {
                    $emailField.prop('readonly', true);
                    $(this).html('<i class="fa fa-pencil"></i> แก้ไข');
                    if ($('#confirm_phone').prop('readonly')) {
                        $('#edit_warning').hide();
                    }
                    // อัพเดตอีเมลในฟอร์มหลัก
                    $('input[name="email"]').val($emailField.val());
                }
            });

            // จัดการการแก้ไขเบอร์โทร
            $('#edit_phone_btn').on('click', function() {
                const $phoneField = $('#confirm_phone');
                if ($phoneField.prop('readonly')) {
                    $phoneField.prop('readonly', false).focus();
                    $(this).html('<i class="fa fa-check"></i> บันทึก');
                    $('#edit_warning').show();
                } else {
                    $phoneField.prop('readonly', true);
                    $(this).html('<i class="fa fa-pencil"></i> แก้ไข');
                    if ($('#confirm_email').prop('readonly')) {
                        $('#edit_warning').hide();
                    }
                    // อัพเดตเบอร์โทรในฟอร์มหลัก
                    $('input[name="phone"]').val($phoneField.val());
                }
            });
        });

        // ยกเลิกการผูก event เดิมเพื่อป้องกันการทำงานซ้ำซ้อน
        $('#confirm_checkbox').off('change');

        // จัดการการเช็คกล่องยืนยัน
        $('#confirm_checkbox').on('change', function() {
            $('#confirm_submit_btn').prop('disabled', !$(this).is(':checked'));
        });

        // ยกเลิกการผูก event เดิมเพื่อป้องกันการทำงานซ้ำซ้อน
        $('#confirm_submit_btn').off('click');

        // เมื่อคลิกปุ่มยืนยันใน modal ให้ส่งฟอร์ม
        $('#confirm_submit_btn').on('click', function() {
            $('#confirmationModal').modal('hide');

            // ต้องอัปเดตข้อมูลในฟอร์มหลักถ้ามีการแก้ไข
            $('input[name="email"]').val($('#confirm_email').val());
            $('input[name="phone"]').val($('#confirm_phone').val());

            // แสดง spinner และส่งฟอร์ม
            loadSpinner();
            $('form').submit();
        });

        // รีเซ็ตสถานะเมื่อปิด modal
        $('#confirmationModal').on('hidden.bs.modal', function() {
            $('#edit_email_btn, #edit_phone_btn').html('<i class="fa fa-pencil"></i> แก้ไข');
        });
        // สิ้นสุดเพิ่มในวันที่ 14/05/2025

        // แก้ไขการตรวจสอบความถูกต้องเมื่อเริ่มพิมพ์
        $('#pickup_location').on('input', function() {
            if ($(this).val().trim() !== '') {
                $(this).removeClass('is-invalid');
            }
        });

        // ฟังก์ชันสำหรับเพิ่มรายการใหม่
        $("#dynamic-ar").click(function() {
            // ตรวจสอบว่ารายการปัจจุบันกรอกครบหรือไม่
            if (!validateCurrentItems()) {
                // แสดงแจ้งเตือนว่าต้องกรอกข้อมูลให้ครบก่อน
                Swal.fire({
                    title: 'กรุณากรอกข้อมูลให้ครบถ้วน',
                    text: 'โปรดกรอกข้อมูลในรายการปัจจุบันให้ครบถ้วนก่อนเพิ่มรายการใหม่',
                    icon: 'warning',
                    confirmButtonText: 'เข้าใจแล้ว'
                });
                return;
            }

            ++i;

            // สร้างแถวใหม่
            let newRow = `
                <tr class="new-row-animation" style="background: white">
                    <td class="card pd-20 mg-t-5">
                        <hr>
                        <div class="mg-t-0">
                            <a href="#" class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10">
                                <div>${i}</div>
                            </a>
                        </div>
                        <h6 class="card-body-title">รายละเอียดทรัพยากร</h6>
                        <p class="mg-b-20 mg-sm-b-30">ข้อมูลรายละเอียดสำหรับการยืมทรัพยากร กรอกข้อมูลให้สมบูรณ์ตามเครื่องหมาย (*)</p>

                        <div class="row mg-t-10">
                            <div class="col">
                                <div class="text-xl-right">
                                    <button type="button" class="btn btn-danger remove-input-field">
                                        <i class="fa fa-trash"></i> ลบรายการนี้
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <div class="col-lg-8">
                                <div class="form-group form-group-lg">
                                    <label class="form-control-label">ชื่อเรื่อง (Title): <span class="tx-danger">*</span></label>
                                    <div class="mg-t-10 mg-sm-t-0">
                                        <input type="text" name="addMoreInputFields[${i}][subject]" placeholder="Enter title" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mg-t-10">
                            <div class="col-lg-8">
                                <div class="form-group form-group-lg">
                                    <label class="form-control-label">ผู้แต่ง (Author): <span class="tx-danger">*</span></label>
                                    <div class="mg-t-10 mg-sm-t-0">
                                        <input type="text" name="addMoreInputFields[${i}][author]" placeholder="Enter author" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mg-t-10">
                            <div class="col-lg-8">
                                <div class="form-group form-group-lg">
                                    <label class="form-control-label">เลขเรียกหนังสือ (Call Number): <span class="tx-danger">*</span></label>
                                    <div class="mg-t-10 mg-sm-t-0">
                                        <input type="text" name="addMoreInputFields[${i}][callnum]" placeholder="Enter call number" class="form-control" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>`;

            // เพิ่มแถวใหม่เข้าไปในตาราง
            $("#dynamicAddRemove").append(newRow);

            // แสดงการแจ้งเตือนเมื่อเพิ่มรายการสำเร็จ
            toastr.success(`เพิ่มรายการยืมที่ ${i} สำเร็จ`, 'สำเร็จ');

            // เลื่อนไปที่รายการที่เพิ่มใหม่
            $('html, body').animate({
                scrollTop: $("#dynamicAddRemove tr:last-child").offset().top - 100
            }, 500);
        });

        // ฟังก์ชันสำหรับลบรายการ (ใช้ event delegation เนื่องจากปุ่มลบสร้างแบบไดนามิก)
        $(document).on('click', '.remove-input-field', function(e) {
            e.preventDefault();

            // แสดงกล่องยืนยันก่อนลบ
            Swal.fire({
                title: 'ยืนยันการลบรายการ',
                text: "คุณต้องการลบรายการนี้ใช่หรือไม่?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่, ลบรายการ',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    let rowToRemove = $(this).closest('tr');

                    // เอฟเฟ็กต์ก่อนลบ
                    rowToRemove.fadeOut(300, function() {
                        $(this).remove();
                        --i;

                        // อัปเดตเลขลำดับของทุกรายการที่เหลือ
                        $("#dynamicAddRemove tr").each(function(index) {
                            $(this).find('.btn-icon div').text(index + 1);
                        });

                        // แสดงการแจ้งเตือนเมื่อลบรายการสำเร็จ
                        toastr.info('ลบรายการเรียบร้อยแล้ว', 'สำเร็จ');
                    });
                }
            });
        });

        // เพิ่ม event ตรวจสอบข้อมูลเมื่อมีการพิมพ์ในช่องที่ต้องกรอก
        $(document).on('input', 'input[required]', function() {
            if ($(this).val().trim() !== '') {
                $(this).removeClass('required-field');
            }
        });

    // ปรับปรุงการส่ง form
    $('form').submit(function(e) {
        e.preventDefault();
        var spinner = $('#loader');
        var form = $(this);

        // เวลานี้ spinner จะเริ่มแสดงเมื่อกดปุ่มยืนยันใน modal แล้ว
        // ไม่ต้องเรียก loadSpinner() ที่นี่อีก เพราะเรียกในปุ่มยืนยันแล้ว

        $.ajax({
            url: form.attr('action'),
            method: 'POST',
            data: form.serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                spinner.hide();

                if(response.success) {
                    // แสดง Success Alert
                    Swal.fire({
                        title: 'บันทึกสำเร็จ!',
                        text: 'รายการยืมถูกบันทึกเรียบร้อยแล้ว',
                        icon: 'success',
                        confirmButtonText: 'ตกลง',
                        allowOutsideClick: false
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Reset form
                            form[0].reset();

                            // Reset select2
                            $('.select2').val('').trigger('change');

                            // Reset dynamic fields
                            $("#dynamicAddRemove tr:not(:first)").remove();
                            $("#dynamicAddRemove tr:first input").val('');
                            i = 1;

                            // Scroll to top smoothly
                            window.scrollTo({
                                top: 0,
                                behavior: 'smooth'
                            });

                            // Redirect to confirmed order page
                            window.location.href = "{{ route('order.view') }}"

                            // Show success message
                            showSuccessMessage();
                        }
                    });
                }
            },
            error: function(xhr) {
                spinner.hide();

                // Handle validation errors
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = '<ul class="list-unstyled">';

                    Object.keys(errors).forEach(function(key) {
                        errorMessage += `<li><i class="fa fa-times-circle text-danger"></i> ${errors[key][0]}</li>`;
                    });

                    errorMessage += '</ul>';

                    Swal.fire({
                        title: 'เกิดข้อผิดพลาด!',
                        html: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'ตกลง'
                    });
                } else {
                    Swal.fire({
                        title: 'เกิดข้อผิดพลาด!',
                        text: 'ไม่สามารถบันทึกข้อมูลได้ กรุณาลองใหม่อีกครั้ง',
                        icon: 'error',
                        confirmButtonText: 'ตกลง'
                    });
                }
            }
        });
    });

    // Function to show success message
    function showSuccessMessage() {
        const successHtml = `
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="d-sm-flex align-items-center justify-content-start">
                    <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
                    <div class="mg-t-0 mg-sm-t-0">
                        <h5 class="mg-b-2 tx-success">รายการยืมออนไลน์ สำเร็จ</h5>
                        <p class="mg-b-0 tx-gray">
                            ระบบได้ส่งรายการยืมออนไลน์ไปยังเจ้าหน้าที่เรียบร้อยแล้ว
                            โปรดตรวจสอบรายการยืมได้จากอีเมล์
                        </p>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        `;

        $('.sl-page-title').after(successHtml);

        // Auto hide after 5 seconds
        setTimeout(function() {
            $('.alert-success').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 5000);
    }

    // Loading spinner with percentage counter
    function loadSpinner() {
        $('#loader').show();
        let percentage = 0;
        const percentageCounter = $('#percentage-counter');
        percentageCounter.text('0%');

        // Clear any existing interval
        if (window.percentageInterval) {
            clearInterval(window.percentageInterval);
        }

        // Set up interval to increase percentage
        window.percentageInterval = setInterval(function() {
            // Increase percentage
            percentage += 1;

            // Update the counter text
            percentageCounter.text(percentage + '%');

            // If we've reached 100%, clear the interval
            if (percentage >= 100) {
                clearInterval(window.percentageInterval);
            }
        }, 50); // Update every 50ms for a total of ~5 seconds to reach 100%
    }

    // To hide the loader
    function hideSpinner() {
        $('#loader').hide();
        // Clear interval if it exists
        if (window.percentageInterval) {
            clearInterval(window.percentageInterval);
        }
    }

    // Close alert
    $(document).on('click', '.alert .close', function() {
        $(this).closest('.alert').fadeOut('slow', function() {
            $(this).remove();
        });
    });

    // Initialize Select2
    $('.select2').select2({
        placeholder: "กรุณาเลือก",
        allowClear: true
    });
});
</script>

<!-- Add required CSS -->
<style>
    .loader-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .loader-content {
        text-align: center;
    }

    .spinner {
        width: 50px;
        height: 50px;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #3498db;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto 20px;
    }

    .percentage-container {
        margin: 10px auto;
        color: #fff;
        font-size: 24px;
        font-weight: bold;
    }

    #percentage-counter {
        display: inline-block;
        min-width: 60px;
        text-align: center;
    }

    .loading-text {
        color: #fff;
        font-size: 18px;
        font-weight: bold;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .select2-container {
        width: 100% !important;
    }

    .alert {
        border-radius: 4px;
        margin-bottom: 20px;
    }

    .alert-success {
        border-left: 4px solid #23bf08;
    }

    .alert-error {
        border-left: 4px solid #dc3545;
    }

    .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }

    .custom-control {
        position: relative;
        padding-left: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0;
    }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top;
        cursor: pointer;
    }

    .custom-control-label::before {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #fff;
        border: #adb5bd solid 1px;
        border-radius: 50%;
    }

    .custom-control-label::after {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50% / 50% 50%;
    }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::before {
        border-color: #17a2b8;
        background-color: #17a2b8;
    }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
    }

    .pickup-options {
        margin-top: 10px;
    }

    .is-invalid {
        border-color: #dc3545 !important;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
    }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }

    .is-invalid ~ .invalid-feedback {
        display: block;
    }

    /* สไตล์สำหรับ modal ยืนยัน */
    .modal-header {
        border-bottom: 1px solid #e9ecef;
        background-color: #f8f9fa;
    }

    .modal-footer {
        border-top: 1px solid #e9ecef;
        background-color: #f8f9fa;
    }

    .form-control-static {
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 500;
    }

    .tx-success {
        color: #28a745 !important;
    }

    .tx-danger {
        color: #dc3545 !important;
    }

    .input-group-text {
        min-width: 40px;
        display: flex;
        justify-content: center;
    }

    #confirm_email, #confirm_phone {
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #confirm_email.valid, #confirm_phone.valid {
        border-color: #28a745;
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    }

    #confirm_email.invalid, #confirm_phone.invalid {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    }

    #confirmationModal .alert-info {
        background-color: #e8f4f8;
        border-color: #bee5eb;
        color: #0c5460;
    }

    /* สไตล์สำหรับ modal ยืนยัน */
    #confirmationModal .form-control-static {
        background-color: #f8f9fa;
        padding: 10px 15px;
        border-radius: 4px;
        border: 1px solid #ced4da;
        min-height: 40px;
    }

    #confirmationModal .form-control-lg {
        height: calc(1.5em + 1rem + 2px);
        padding: .5rem 1rem;
        font-size: 1.1rem;
        border-radius: .3rem;
    }

    #confirmationModal .custom-control-input:checked ~ .custom-control-label::before {
        color: #fff;
        border-color: #28a745;
        background-color: #28a745;
    }

    #confirmationModal .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba;
    }

    #confirmationModal .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
    }

    #confirmationModal .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    /* สไตล์เมื่อฟิลด์เปิดให้แก้ไข */
    #confirm_email:not([readonly]), #confirm_phone:not([readonly]) {
        background-color: #fff;
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top;
        cursor: pointer;
        padding-left: 0.5rem;
    }

    .custom-control-label::before {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #fff;
        border: #adb5bd solid 1px;
    }

    .custom-control-input:checked ~ .custom-control-label::before {
        color: #fff;
        border-color: #28a745;
        background-color: #28a745;
    }

    .custom-control-label::after {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50% / 50% 50%;
    }

    .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
    }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem;
    }

    .custom-checkbox .custom-control-label::before {
        border-radius: 0.25rem;
    }

    .custom-control-input {
        position: absolute;
        left: 0;
        z-index: -1;
        width: 1rem;
        height: 1rem;
        opacity: 0;
    }
    </style>


<!-- เพิ่ม SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
