@extends('layouts.back_master')
@section('banner') active @endsection
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
                              <h2 class="content-header-title float-left mb-0">Banner Edit</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Banner Edit</li>
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

                     @if(Session::has('update_success'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Update Banner.
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
                              <h4 class="card-title"> Update Banner Here... </h4>
                              <div class="d-flex justify-content-end">
                                <a href="{{ route('banner.index') }}" class="btn btn-primary font-weight-bolder ">
                                <i class="la la-list"></i>All Banner</a>
                              </div>
                          </div>

                          <form id="jquery-val-form" action="{{ route('banner.update',$data->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                          <div class="card-body">
                            <input type="hidden" name="old_image" value="{{ $data->image }}">
                            <div class="row">
                              <div class="col-md-6">
                                {{-- item --}}
                                <label>Title En: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Title En" name="title_en" class="form-control" value="{{ $data->title_en }}" required=""/>
                                </div>
                                {{-- item --}}
                                <label>Title bn: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Title bn" name="title_bn" class="form-control" value="{{ $data->title_bn }}" required=""/>
                                </div>
                                {{-- item --}}
                                <label>Title Arb: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Title Arb" name="title_arb" class="form-control" value="{{ $data->title_arb }}" required=""/>
                                </div>
                                {{-- item --}}
                                <label>Button En: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button En" value="{{ $data->button_en }}" name="button_en" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Button bn: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button bn" name="button_bn" class="form-control" value="{{ $data->button_bn }}"/>
                                </div>
                                {{-- item --}}
                                <label>Button arb: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button arb" name="button_arb" class="form-control" value="{{ $data->button_arb }}"/>
                                </div>
                              </div>
                              {{-- col second --}}
                              <div class="col-md-6">
                                {{-- item --}}
                                <label>Sub Title En: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Sub Title" name="subtitle_en" class="form-control" value="{{ $data->subtitle_en }}"/>
                                </div>
                                {{-- item --}}
                                <label>Sub Title bn: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Sub Title" name="subtitle_bn" class="form-control" value="{{ $data->subtitle_bn }}"/>
                                </div>
                                {{-- item --}}
                                <label>Sub Title arb: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Sub Title" name="subtitle_arb" class="form-control" value="{{ $data->subtitle_arb }}"/>
                                </div>
                                {{-- item --}}
                                <label>Url: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button Url" name="url" class="form-control" value="{{ $data->url }}" />
                                </div>

                                <div class="form-group">
                                  <!-- header media -->
                                  <div class="row">
                                      <div class="col-md-7">
                                        <div class="media">
                                            <a href="javascript:void(0);" class="mr-25">
                                                <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="img-upload3" class="rounded mr-50" alt="Banner Image" height="100" width="100" />
                                            </a>
                                            <!-- upload and reset button -->
                                            <div class="media-body mt-75 ml-1">
                                                <label for="imgInp3" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                <input type="file" name="image" id="imgInp3" hidden accept="image/*" />
                                                <p>Allowed JPG, GIF or PNG</p>
                                            </div>
                                            <!--/ upload and reset button -->
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <img src="{{ asset($data->image) }}" alt="" width="100">
                                      </div>
                                      <div class="col-md-2"></div>
                                  </div>

                                  <!--/ header media -->
                                </div>
                              </div>
                            </div>


                          </div>
                          <div class="card-footer">
                             <button type="submit" class="btn btn-primary mr-2">Update</button>
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
