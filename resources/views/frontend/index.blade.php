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

                        /* สำหรับการตรวจสอบข้อมูล */
                        .required-field {
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
                            <button type="submit" class="btn btn-teal btn-block" id="closeModel"><i class="fa fa-download mg-r-10"></i>ส่งข้อมูลรายการยืม</button>
                            {{-- <button class="btn btn-danger">Cancel</button> --}}
                        </div>
                    </div><!-- col end -->
                </div> <!-- row end -->

        </form>

    </div><!-- sl-pagebody -->
    @include('frontend.body.footer')
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

        // ฟังก์ชันสำหรับตรวจสอบว่ารายการปัจจุบันกรอกครบหรือไม่
        function validateCurrentItems() {
            let isValid = true;
            let focusSet = false;

            $(`#dynamicAddRemove tr:last-child input[required]`).each(function() {
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

            return isValid;
        }

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

        // Start the spinner with percentage counter immediately
        loadSpinner();

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
    </style>


<!-- เพิ่ม SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
