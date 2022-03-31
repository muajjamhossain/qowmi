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
                              <h2 class="content-header-title float-left mb-0">Course View</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Course View</li>
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
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title"> View Course Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('course.index') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>All Course</a>
                              </div>
                          </div>
                          {{-- card body --}}
                          <div class="card-body">
                            {{-- form element --}}
                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Course Name English:') }}</label>
                              <div class="col-md-7">
                                <input type="text" class="form-control" disabled value="{{ $data->course_name_en }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Course Name Bangla:') }}</label>
                              <div class="col-md-7">
                                <input type="text" class="form-control" disabled value="{{ $data->course_name_bn }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Course Name Arabice:') }}</label>
                              <div class="col-md-7">
                                <input type="text" class="form-control" disabled value="{{ $data->course_name_arb }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Start Date:') }}</label>
                              <div class="col-md-7">
                                <input type="date" class="form-control" disabled value="{{ $data->start_date }}">
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('End Date:') }}</label>
                              <div class="col-md-7">
                                <input type="date" class="form-control" value="{{ $data->end_date }}" disabled>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Class In Time:') }}</label>
                              <div class="col-md-7">
                                <input type="text" class="form-control" value="{{ $data->class_time_in }}" disabled>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Class Out Time:') }}</label>
                              <div class="col-md-7">
                                <input type="text" class="form-control" value="{{ $data->class_time_out }}" disabled>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Regular Price:') }}</label>
                              <div class="col-md-7">
                                <input type="text" class="form-control" value="{{ $data->ragular_price }}" disabled>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Discount Price:') }}</label>
                              <div class="col-md-7">
                                <input type="text" class="form-control" value="{{ $data->discount_price }}" disabled>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription English:') }}</label>
                              <div class="col-md-7">
                                <textarea rows="8" cols="80" class="form-control" disabled>{{ $data->description_en }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription Bangla:') }}</label>
                              <div class="col-md-7">
                                <textarea rows="8" cols="80" class="form-control" disabled>{{ $data->description_bn }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription Bangla:') }}</label>
                              <div class="col-md-7">
                                <textarea rows="8" cols="80" class="form-control" disabled>{{ $data->description_arb }}</textarea>
                              </div>
                            </div>

                            <div class="form-group custom_form_group row">
                              <label class="ccontrol-label col-md-3">{{ __('Image:') }}</label>
                              <div class="col-md-7">
                                <div class="">
                                  <!-- header media -->
                                  <div class="media">
                                      <a href="javascript:void(0);" class="mr-25">
                                          <img src="{{ asset($data->image) }}" id="img-upload3" class="rounded mr-50" alt="Course Image" height="100" width="200" />
                                      </a>
                                  </div>
                                  <!--/ header media -->
                                </div>
                              </div>
                            </div>


                            {{-- form element --}}
                          </div>
                          <div class="card-footer text-center"> . </div>
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
