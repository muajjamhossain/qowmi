@extends('layouts.back_master')
@section('role') active @endsection
@section('roles.index') active @endsection
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
                              <h2 class="content-header-title float-left mb-0">Role list</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Role list</li>
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

                     @if(Session::has('success'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Added New Room.
                        </div>
                      @endif

                      @if(Session::has('success_delete'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Delete Room.
                        </div>
                      @endif

                      @if(Session::has('success_delete'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Delete Room.
                        </div>
                      @endif

                      @if(Session::has('success_store'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Add New Room.
                        </div>
                      @endif

                      @if(Session::has('success_update'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Update Room.
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
                              <h4 class="card-title"> All Role List Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('roles.create') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>Create New Role</a>
                              </div>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="myTable"
                                      class="table table-striped text-center table-bordered dt-responsive nowrap"
                                      style="100%">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Name</th>
                                              <th>Manage</th>
                                          </tr>
                                      </thead>
                                      <tbody>

                                        @foreach ($roles as $key => $role)
                                        <tr>
                                          <td>{{ ++$i }}</td>
                                          <td>{{ $role->name }}</td>
                                          <td>
                                            {{-- ACTION --}}
                                            <a href="#" title="view" style="margin-right:1px"><i class="fa fa-plus-square fa-lg view_icon"></i> </a>
                                            @can('role-edit')
                                            <a href="{{ route('roles.edit',$role->id) }}" title="edit"><i class="fas fa-user-edit fa-lg edit_icon"></i></a>
                                            @endcan
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
    {{-- Content --}}
@endsection
