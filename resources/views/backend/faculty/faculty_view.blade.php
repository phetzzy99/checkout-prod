@extends('admin.admin_master');

@section('admin')

@section('title')
ระบบงานการยืมออนไลน์
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
                <h6 class="card-title mg-b-5 tx-13 tx-uppercase tx-bold tx-spacing-1">Faculty List</h6>
                <span class="d-block tx-12">{{$month}} {{$day}}, {{$year}}</span>
              </div>
            </div><!-- card-header -->

            <div class="card pd-20 pd-sm-20">
      
              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-50p">Faculty Name TH</th>
                      <th class="wd-10p">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @php
                          $i = 1;
                      @endphp
                      @foreach($faculty as $item)
                    <tr>
                      {{-- <th scope="row"> {{ $faculty->firstItem()+$loop->index }}</th> --}}
                      <td>{{ $item->faculty_name_th }}</td>
                      <td>
                          <a href="{{ route('faculty.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> Edit</a>
                          
                          <a href="{{ route('faculty.delete',$item->id) }}" class="btn btn-danger" title="Delete Data"><i class="fa fa-trash"></i> Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
            </div><!-- card -->

          </div><!-- card -->
        </div><!-- col-8 -->


        {{-- -------------- Add Faculty Page ---------------------- --}}

        <div class="col-4 mg-t-20 mg-xl-t-0">
          <div class="card pd-20 pd-sm-25">
            <h6 class="card-body-title">Add Faculty</h6>
              
            <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-10">

                    <form method="POST" action="{{ route('faculty.store') }}" >
                      @csrf

                        <div class="form-group">
                          <label class="form-control-label">Faculty Name Thai: </label>
                          <input class="form-control" type="text" name="faculty_name_th" placeholder="Enter Faculty Name">
                          @error('faculty_name_th')
                            <span class="text-danger">* {{ $message }}</span>
                          @enderror
                        </div>

                        <div class="text-xl-right">
                          <input type="submit" class="btn btn-info mg-r-5" value="Add New">
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
          searchPlaceholder: 'Search...',
          sSearch: '',
          lengthMenu: '_MENU_ items/page',
        }
      });

      // Select2
      $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
  </script>
    
@endsection