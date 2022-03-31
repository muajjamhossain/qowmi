@extends('layouts.back_master')
@section('setting') active @endsection
@section('setting.aboutAuth') active @endsection
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
                              <h2 class="content-header-title float-left mb-0">Author Information Update</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Author Information Update</li>
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

                     @if(Session::has('success_update'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Update Author Information.
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
                              <h4 class="card-title"> Update Author Imformation Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('course.index') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>All Course</a>
                              </div>
                          </div>

                          <form id="jquery-val-form" action="{{ route('update-author.info') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">
                            {{-- form element --}}
                            <div class="form-group row custom_form_group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Name English:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Name English" class="form-control" name="name" value="{{ $data->name }}" required>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Name Bangla:') }}</label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Name Bangla" class="form-control" name="name_bn" value="{{ $data->name_bn }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Name Arabic:') }}</label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Name Arabic" class="form-control" name="name_arb" value="{{ $data->name_arb }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Title English:') }}</label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Name English" class="form-control" name="title" value="{{ $data->title }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Title Bangla:') }}</label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Name Bangla" class="form-control" name="title_bn" value="{{ $data->title_bn }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Title Arabic:') }}</label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Name Arabic" class="form-control" name="title_arb" value="{{ $data->title_arb }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription English:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <textarea name="describe1" rows="8" cols="80" class="form-control" placeholder="Enter English Description">{{ $data->describe1 }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription Bangla:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <textarea name="describe1_bn" rows="8" cols="80" class="form-control" placeholder="Enter Bangla Description">{{ $data->describe1_bn }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription Arabic:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <textarea name="describe1_arb" rows="8" cols="80" class="form-control" placeholder="Enter Arabic Description">{{ $data->describe1_arb }}</textarea>
                              </div>
                            </div>

                            <div class="form-group custom_form_group row">
                              <label class="ccontrol-label col-md-3">{{ __('Image:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <div class="">
                                  <!-- header media -->
                                  <div class="media">
                                      <a href="javascript:void(0);" class="mr-25">
                                          <img src="{{ asset($data->image) }}" id="img-upload3" class="rounded mr-50" alt="Author Image" height="100" width="200" />
                                      </a>
                                      <!-- upload and reset button -->
                                      <div class="media-body mt-75 ml-1">
                                          <label for="imgInp3" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                          <input type="file" name="image" id="imgInp3" hidden accept="image/*" />
                                          <p>Allowed JPG, GIF or PNG</p>
                                      </div>
                                      <!--/ upload and reset button -->
                                  </div>
                                  <!--/ header media -->
                                </div>
                              </div>
                            </div>


                            {{-- form element --}}
                          </div>
                          <div class="card-footer text-center">
                             <button type="submit" class="btn btn-primary mr-2">Update</button>
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
