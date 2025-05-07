@extends('admin.admin_master');

@section('admin')

@section('title')
ระบบงานการยืมออนไลน์
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="sl-mainpanel">

    <div class="sl-pagebody">

      <div class="row row-sm mg-t-5">
        
        {{-- -------------- Add Faculty Page ---------------------- --}}

        <div class="col-8 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 pd-sm-25">
            <h6 class="card-body-title">Edit Patron Type</h6>
              
            <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-10">

                    <form method="POST" action="" >
                      @csrf

                      <input type="hidden" name="id" value="{{ $patron_type->id }}">

                        <div class="form-group mg-t-20">
                          <label class="form-control-label">Patron Type Name: <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="patron_type_name" placeholder="Enter Patron Type Name" value="{{ $patron_type->patron_type_name }}">
                          @error('patron_type_name')
                            <div class="alert alert-danger" role="alert">
                              <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                            </div>
                            {{-- <span class="text-danger">* {{ $message }}</span> --}}
                          @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Type Qty : </label>
                            <input class="form-control" type="text" name="type_qty" placeholder="Enter Type Qty" value="{{ $patron_type->type_qty }}">
                            @error('type_qty')
                                <div class="alert alert-danger" role="alert">
                                    <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="text-xl-right">
                          <input type="submit" class="btn btn-info mg-r-5" value="Edit Data">
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


    
@endsection