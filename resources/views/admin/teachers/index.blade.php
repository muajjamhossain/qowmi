@extends('layouts.back_master')
@section('teachers') active @endsection
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
                              <h2 class="content-header-title float-left mb-0">Teachers list</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Teachers list</li>
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

                     @if(Session::has('store_success'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Added New Teachers.
                        </div>
                      @endif

                      @if(Session::has('success_delete'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Delete Teachers.
                        </div>
                      @endif

                      @if(Session::has('success_update'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Update Teachers.
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
                              <h4 class="card-title"> All Teachers List Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('teachers.create') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>Add New Teachers</a>
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
                                              <th>Name</th>
                                              <th>Title</th>
                                              <th>Description</th>
                                              <th>Education</th>
                                              <th>Manage</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($data as $teachers)
                                        <tr>
                                          <td>
                                            <img src="{{ asset($teachers->image) }}" alt="teachers" style="width:100px">
                                          </td>
                                          <td>{{ $teachers->name_en }}</td>
                                          <td>{{ $teachers->title_en }}</td>
                                          <td>{{ Str::limit($teachers->description_en,15) }}</td>
                                          <td>{{ $teachers->education1 }}</td>
                                          <td>
                                            {{-- ACTION --}}
                                            <a href="{{ route('teachers.show',$teachers->id) }}" title="view" style="margin-right:1px"><i class="fa fa-plus-square fa-lg view_icon"></i> </a>
                                            <a href="{{ route('teachers.edit',$teachers->id) }}" title="edit"><i class="fas fa-user-edit fa-lg edit_icon"></i></a>
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
