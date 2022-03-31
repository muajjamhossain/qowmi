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
                              <h2 class="content-header-title float-left mb-0">Banner list</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Banner list</li>
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
                           <strong>Successfully!</strong> Added New Banner.
                        </div>
                      @endif

                      @if(Session::has('success_delete'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Delete Banner.
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
                              <h4 class="card-title"> All Banner List Here... </h4>
                              <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-backdrop="false" data-target="#backdrop">Create New Banner</button>
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
                                              <th>Title</th>
                                              <th>Sub Title</th>
                                              <th>Button</th>
                                              <th>Url</th>
                                              <th>Manage</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($data as $banner)
                                        <tr>
                                          <td>
                                            <img src="{{ asset($banner->image) }}" alt="banner" style="width:100px">
                                          </td>
                                          <td>{{ $banner->title_en }}</td>
                                          <td>{{ $banner->subtitle_en }}</td>
                                          <td>{{ $banner->button_en }}</td>
                                          <td>{{ $banner->url }}</td>
                                          <td>
                                            {{-- ACTION --}}
                                            <a href="{{ route('banner.show',$banner->id) }}" title="view" style="margin-right:1px"><i class="fa fa-plus-square fa-lg view_icon"></i> </a>
                                            <a href="{{ route('banner.edit',$banner->id) }}" title="edit"><i class="fas fa-user-edit fa-lg edit_icon"></i></a>
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
    {{-- modal --}}
    <div class="disabled-backdrop-ex">
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                {{-- centered --}}
                {{-- modal content --}}
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel33">Create New Banner</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                      @csrf
                        <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6">
                                {{-- item --}}
                                <label>Title En: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Title En" name="title_en" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Title bn: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Title bn" name="title_bn" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Title Arb: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Title Arb" name="title_arb" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Button En: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button En" name="button_en" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Button bn: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button bn" name="button_bn" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Button arb: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button arb" name="button_arb" class="form-control"/>
                                </div>
                              </div>
                              {{-- col second --}}
                              <div class="col-md-6">
                                {{-- item --}}
                                <label>Sub Title En: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Sub Title" name="subtitle_en" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Sub Title bn: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Sub Title" name="subtitle_bn" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Sub Title arb: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Sub Title" name="subtitle_arb" class="form-control"/>
                                </div>
                                {{-- item --}}
                                <label>Url: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Banner Button Url" name="url" class="form-control"/>
                                </div>

                                <div class="form-group">
                                  <!-- header media -->
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
                                  <!--/ header media -->
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">SAVE</button>
                        </div>
                    </form>
                </div>
                {{-- modal content --}}
            </div>
        </div>
    </div>
    <!-- Disabled Backdrop end-->
    {{-- modal --}}
@endsection
