@extends('layouts.back_master')
@section('course') active @endsection
@section('content')
    {{-- Content --}}
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        {{-- component --}}
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <div class="breadcrumbs__custom">
                              <h2 class="content-header-title float-left mb-0">Course list</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Course list</li>
                              </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <!-- Tooltip validations start -->
            <section class="tooltip-validations" id="tooltip-validation">
                {{-- Response Masseage --}}
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                      @if(Session::has('success_delete'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Delete Course.
                        </div>
                      @endif

                      @if(Session::has('success_update'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Update Course.
                        </div>
                      @endif

                       @if(Session::has('success_active'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Active.
                        </div>
                      @endif

                      @if(Session::has('success_inactive'))
                        <div class="alert alert-warning alerterror" role="alert">
                           <strong></strong> InActive.
                        </div>
                      @endif

                    </div>
                    <div class="col-md-2"></div>
                </div>
                {{-- Response Masseage --}}
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title"> All Course List Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('course.create') }}" class="btn btn-primary font-weight-bolder">Create New Course</a>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="myTable"
                                      class="table table-striped text-center table-bordered dt-responsive nowrap"
                                      style="100%">
                                      <thead>
                                          <tr>
                                              <th>Image</th>
                                              <th>Course Name</th>
                                              <th>Duration</th>
                                              <th>Price</th>
                                              <th>Manage</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($data as $course)
                                        <tr>
                                          <td>
                                            <img src="{{ asset($course->image) }}" alt="banner" style="width:100px">
                                          </td>
                                          <td>{{ $course->course_name_en }}</td>
                                          <td>{{ $course->duration }}</td>
                                          <td>{{ $course->ragular_price }}</td>
                                          <td>
                                            {{-- ACTION --}}
                                            <a href="{{ route('course.show',$course->id) }}" title="view" style="margin-right:1px"><i class="fa fa-plus-square fa-lg view_icon"></i> </a>

                                            <a href="{{ route('course.edit',$course->id) }}" title="edit"><i class="fas fa-user-edit fa-lg edit_icon"></i></a>

                                            <a href="{{ route('course.delete',$course->id) }}" id="delete" title="edit"><i class="fas fa-trash-alt fa-lg delete_icon"></i></a>
                                            {{-- ACTION --}}
                                          </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                  </table>

                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </section>
            <!-- Tooltip validations end -->
        </div>
        </div>
        {{-- component --}}
    </div>
@endsection
