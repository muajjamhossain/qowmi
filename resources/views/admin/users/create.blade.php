@extends('layouts.back_master')
@section('user') active @endsection
@section('users.create') active @endsection
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
                              <h2 class="content-header-title float-left mb-0">User Create</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">User Create</li>
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

                    </div>
                    <div class="col-md-2"></div>
                </div>
                {{-- Response Masseage --}}
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title"> Create New User Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('users.index') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>All User</a>
                              </div>
                          </div>

                          <form id="jquery-val-form" action="{{ route('users.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">

                            <div class="form-group row custom_form_group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Name:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Name" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="ccontrol-label col-md-3">{{ __('Email:') }}<span class="req_star">*</span></label>
                                <div class="col-md-7">
                                  <input type="text" placeholder="Enter Email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                                  @if ($errors->has('email'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                  @endif
                                </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="ccontrol-label col-md-3">{{ __('Password:') }}<span class="req_star">*</span></label>
                                <div class="col-md-7">
                                  <input type="password" class="form-control" placeholder="********" id="password" name="password" autocomplete="new-password" required>
                                  @if ($errors->has('password'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                                  @endif
                                </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="ccontrol-label col-md-3">{{ __('Confirmed Password:') }}<span class="req_star">*</span></label>
                                <div class="col-md-7">
                                  <input type="password" class="form-control" placeholder="********" id="password_confirmation" name="password_confirmation" required>
                                  @if ($errors->has('password_confirmation'))
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $errors->first('password_confirmation') }}</strong>
                                  </span>
                                  @endif
                                </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('roles') ? ' has-error' : '' }}">
                                <label class="ccontrol-label col-md-3">{{ __('Role:') }}<span class="req_star">*</span></label>
                                <div class="col-md-7">
                                  <select name="roles" class="select2 form-control" id="roles" required="">
                                      <option value="">Role Select</option>
                                      {{-- {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!} --}}

                                      @foreach($roles as $result)
                                          <option value="{{ $result }}">{{ $result }}</option>
                                      @endforeach
                                  </select>
                                  <div class="invalid-feedback">Please select your Role</div>
                                </div>
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
