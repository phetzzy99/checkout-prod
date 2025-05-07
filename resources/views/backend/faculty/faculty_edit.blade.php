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
            <h6 class="card-body-title">Edit Faculty</h6>
              
            <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-10">

                    <form method="POST" action="{{ route('faculty.update') }}" >
                      @csrf

                      <input type="hidden" name="id" value="{{ $faculty->id }}">

                        <div class="form-group">
                          <label class="form-control-label">Faculty Name Thai: <span class="text-danger">*</span></label>
                          <input class="form-control" type="text" name="faculty_name_th" placeholder="Enter Faculty Name" value="{{ $faculty->faculty_name_th }}">
                          @error('faculty_name_th')
                            <div class="alert alert-danger" role="alert">
                              <strong class="d-block d-sm-inline-block-force">!</strong> {{ $message }}
                            </div>
                            {{-- <span class="text-danger">* {{ $message }}</span> --}}
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