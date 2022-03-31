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
                              <h2 class="content-header-title float-left mb-0">Teachers Create</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Teachers Create</li>
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

                    </div>
                    <div class="col-md-2"></div>
                </div>
                {{-- Response Masseage --}}
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title"> Create New Teachers Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('teachers.index') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>All Teachers</a>
                              </div>
                          </div>

                          <form id="jquery-val-form" action="{{ route('teachers.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">

                            <div class="row">
                                {{-- first item --}}
                                <div class="col-md-6">
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('name_en') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Name English:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Name English" class="form-control" id="name_en" name="name_en" value="{{old('name_en')}}" required>
                                      @if ($errors->has('name_en'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name_en') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('name_arb') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Name Arabic:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Name Arabic" class="form-control" id="name_arb" name="name_arb" value="{{old('name_arb')}}" required>
                                      @if ($errors->has('name_arb'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name_arb') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('title_bn') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Title Bangla:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Title Bangla" class="form-control" id="title_bn" name="title_bn" value="{{old('title_bn')}}" required>
                                      @if ($errors->has('title_bn'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('title_bn') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('description_en') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Description English:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <textarea name="description_en" class="form-control" rows="8" cols="80" placeholder="Enter Description English" required>{{old('description_en')}}</textarea>
                                      @if ($errors->has('description_en'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('description_en') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('description_bn') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Description Bangla:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <textarea name="description_bn" class="form-control" rows="8" cols="80" placeholder="Enter Description Bangla" required>{{old('description_bn')}}</textarea>
                                      @if ($errors->has('description_bn'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('description_bn') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('description_arb') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Description Arabic:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <textarea name="description_arb" class="form-control" rows="8" cols="80" placeholder="Enter Description Arabic" required>{{old('description_arb')}}</textarea>
                                      @if ($errors->has('description_arb'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('description_arb') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <!-- header media -->
                                    <div class="media">
                                        <a href="javascript:void(0);" class="mr-25">
                                            <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="img-upload3" class="rounded mr-50" alt="Banner Image" height="100" width="200" />
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

                                  {{-- *************** --}}
                                </div>
                                {{-- second item --}}
                                <div class="col-md-6">
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('name_bn') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Name Bangla:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Name Bangla" class="form-control" id="name_bn" name="name_bn" value="{{old('name_bn')}}" required>
                                      @if ($errors->has('name_bn'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('name_bn') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Title English:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Title English" class="form-control" id="title_en" name="title_en" value="{{old('title_en')}}" required>
                                      @if ($errors->has('title_en'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('title_en') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('title_arb') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Title Arabic:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Title Arabic" class="form-control" id="title_arb" name="title_arb" value="{{old('title_arb')}}" required>
                                      @if ($errors->has('title_arb'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('title_arb') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('education1') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Education 01:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Educational" class="form-control" id="education1" name="education1" value="{{old('education1')}}" required>
                                      @if ($errors->has('education1'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('education1') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group{{ $errors->has('education2') ? ' has-error' : '' }}">
                                    <label class="ccontrol-label">{{ __('Education 02:') }}<span class="req_star">*</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Educational" class="form-control" id="education2" name="education2" value="{{old('education2')}}" required>
                                      @if ($errors->has('education2'))
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $errors->first('education2') }}</strong>
                                          </span>
                                      @endif
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Education 03:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Educational" class="form-control" name="education3" value="{{old('education3')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Education 04:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Educational" class="form-control" name="education4" value="{{old('education4')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Education 05:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Educational" class="form-control" name="education5" value="{{old('education5')}}">
                                    </div>
                                  </div>
                                  <hr>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Facebook:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Facebook Link" class="form-control" name="sm_1" value="{{old('sm_1')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Twitter:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Twitter Link" class="form-control" name="sm_2" value="{{old('sm_2')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Linkdien:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Linkdien Link" class="form-control" name="sm_3" value="{{old('sm_3')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Instagram:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Instagram Link" class="form-control" name="sm_4" value="{{old('sm_4')}}">
                                    </div>
                                  </div>
                                  <hr>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Phone Number:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Phone Number" class="form-control" name="phone1" value="{{old('phone1')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Phone Number 2:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Phone Number 2" class="form-control" name="phone2" value="{{old('phone2')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Email:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Email" class="form-control" name="email1" value="{{old('email1')}}">
                                    </div>
                                  </div>
                                  {{-- element --}}
                                  <div class="form-group custom_form_group">
                                    <label class="ccontrol-label">{{ __('Email 2:') }}<span class="req_star">(Optional)</span></label>
                                    <div>
                                      <input type="text" placeholder="Enter Email 2" class="form-control" name="email2" value="{{old('email2')}}">
                                    </div>
                                  </div>
                                  {{-- *************** --}}
                                </div>
                            </div>








                          <div class="card-footer">
                             <button type="submit" class="btn btn-primary mr-2">Save</button>
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
