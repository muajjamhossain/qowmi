@extends('layouts.back_master')
@section('role') active @endsection
@section('roles.create') active @endsection
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
                              <h2 class="content-header-title float-left mb-0">Role Create</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Role Create</li>
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
                           <strong>Successfully!</strong> Added New Role.
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
                              <h4 class="card-title"> Create New Role Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('roles.index') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>All User</a>
                              </div>
                          </div>

                          <form id="jquery-val-form" action="{{ route('roles.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group custom_form_group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Name:') }}<span class="req_star">*</span></label>
                                    <div class="">
                                      <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                              </div>

                              {{-- permission --}}
                              <div class="col-md-8">
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br/>
                                    @foreach($permission as $value)
                                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                        {{ $value->name }}</label>
                                    <br/>
                                    @endforeach
                                </div>
                                
                              </div>
                              {{-- permission --}}
                            </div>




                          <div class="card-footer">
                             <button type="submit" class="btn btn-primary mr-2">Submit</button>
                             <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                          </form>

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
