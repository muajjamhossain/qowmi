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
                              <h2 class="content-header-title float-left mb-0">Course Create</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Course Create</li>
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
                           <strong>Successfully!</strong> Added New Course.
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
                              <h4 class="card-title"> Create New Course Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('course.index') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>All Course</a>
                              </div>
                          </div>

                          <form id="jquery-val-form" action="{{ route('course.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                          <div class="card-body">
                            {{-- form element --}}
                            <div class="form-group row custom_form_group{{ $errors->has('course_name_en') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Course Name English:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Course Name English" class="form-control" name="course_name_en" value="{{old('course_name_en')}}" required>
                                @if ($errors->has('course_name_en'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('course_name_en') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('course_name_bn') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Course Name Bangla:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Course Name Bangla" class="form-control" name="course_name_bn" value="{{old('course_name_bn')}}" required>
                                @if ($errors->has('course_name_bn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('course_name_bn') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('course_name_arb') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Course Name Arabice:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Course Name Arabic" class="form-control" name="course_name_arb" value="{{old('course_name_arb')}}" required>
                                @if ($errors->has('course_name_arb'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('course_name_arb') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('start_date') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Start Date:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="date" placeholder="Enter Start Date" class="form-control" name="start_date" value="{{old('start_date')}}" required>
                                @if ($errors->has('start_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('start_date') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('end_date') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('End Date:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="date" placeholder="Enter End Date" class="form-control" name="end_date" value="{{old('end_date')}}" required>
                                @if ($errors->has('end_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('class_time_in') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Class In Time:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Class In Time" class="form-control" name="class_time_in" value="{{old('class_time_in')}}" required>
                                @if ($errors->has('class_time_in'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('class_time_in') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('class_time_out') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Class Out Time:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Class Out Time" class="form-control" name="class_time_out" value="{{old('class_time_out')}}" required>
                                @if ($errors->has('class_time_out'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('class_time_out') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('ragular_price') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Regular Price:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Regular Price" class="form-control" name="ragular_price" value="{{old('ragular_price')}}" required>
                                @if ($errors->has('ragular_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ragular_price') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group{{ $errors->has('discount_price') ? ' has-error' : '' }}">
                              <label class="ccontrol-label col-md-3">{{ __('Discount Price:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <input type="text" placeholder="Enter Discount Price" class="form-control" name="discount_price" value="{{old('discount_price')}}" required>
                                @if ($errors->has('discount_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('discount_price') }}</strong>
                                    </span>
                                @endif
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription English:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <textarea name="description_en" rows="8" cols="80" class="form-control" placeholder="Enter English Description">{{ old('description_en') }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription Bangla:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <textarea name="description_bn" rows="8" cols="80" class="form-control" placeholder="Enter Bangla Description">{{ old('description_bn') }}</textarea>
                              </div>
                            </div>

                            <div class="form-group row custom_form_group">
                              <label class="ccontrol-label col-md-3">{{ __('Decription Bangla:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <textarea name="description_arb" rows="8" cols="80" class="form-control" placeholder="Enter Arabic Description">{{ old('description_arb') }}</textarea>
                              </div>
                            </div>

                            <div class="form-group custom_form_group row">
                              <label class="ccontrol-label col-md-3">{{ __('Main Thumbnail:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <div class="form-group">
                                  <input class="form-control" type="file" name="thumbnail" value="{{ old('product_thambnail') }}" onchange="mainThambUrl(this)">
                                  <img src="" id="mainThmb">
                                </div>
                              </div>
                            </div>

                            <div class="form-group custom_form_group row">
                              <label class="ccontrol-label col-md-3">{{ __('Image:') }}<span class="req_star">*</span></label>
                              <div class="col-md-7">
                                <div class="">
                                  <!-- header media -->
                                  <div class="media">
                                      <a href="javascript:void(0);" class="mr-25">
                                          <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="img-upload3" class="rounded mr-50" alt="Course Image" height="100" width="200" />
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
                             <button type="submit" class="btn btn-primary mr-2">Save</button>
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
    <script>
    function mainThambUrl(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e){
            $('#mainThmb').attr('src',e.target.result).width(200)
                  .height(100);
        };
        reader.readAsDataURL(input.files[0]);


      }
    }
  </script>
@endsection
