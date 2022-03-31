@extends('layouts.back_master')
@section('gellary') active @endsection
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
                              <h2 class="content-header-title float-left mb-0">Gellary list</h2>
                              <div class="breadcrumb-wrapper">
                                  <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                  </li>
                                  <li class="breadcrumb-item active">Gellary list</li>
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

                     @if(Session::has('success_store'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Added New Gellary Image.
                        </div>
                      @endif

                      @if(Session::has('success_delete'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Delete Gellary Image.
                        </div>
                      @endif

                      @if(Session::has('success_update'))
                        <div class="alert alert-success alertsuccess" role="alert">
                           <strong>Successfully!</strong> Save Gellary Image.
                        </div>
                      @endif

                    </div>
                    <div class="col-md-2"></div>
                </div>
                {{-- Response Masseage --}}
                <div class="row">
                    <div class="col-md-6 m-auto">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title"> Upload Gellary Image... </h4>
                          </div>
                          <form class="" action="{{ route('gellary.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          {{-- do work --}}
                          <div class="card-body">
                            {{-- form element --}}
                            <div class="form-group">
                              <label class="form-control-label">Multiple_image: <span class="tx-danger">*</span></label>
                              <input class="form-control" type="file" name="multi_img[]" value="{{ old('multi_img') }}" multiple id="multiImg" required>
                              @error('multi_img')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="row" id="preview_img" style="margin-left:10px">
                            </div>
                            {{-- form element --}}
                          </div>
                          <div class="card-footer text-center">
                             <button type="submit" class="btn btn-primary mr-2">UPLOAD</button>
                          </div>
                          {{-- do work --}}
                          </form>
                      </div>
                    </div>
                </div>
                {{-- LIST --}}
                <div class="row">
                    <div class="col-12">
                      <div class="card">
                          <div class="card-header">
                              <h4 class="card-title"> All Gellary Image List Here... </h4>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table id="myTable"
                                      class="table table-striped text-center table-bordered dt-responsive nowrap"
                                      style="100%">
                                      <thead>
                                          <tr>
                                              <th>SL No</th>
                                              <th>Image</th>
                                              <th>Manage</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($data as $gellary)
                                        <tr>
                                          <td>{{ $loop->iteration }}</td>
                                          <td>
                                            <img src="{{ asset($gellary->image_path) }}" alt="banner" style="width:100px">
                                          </td>
                                          <td>
                                            {{-- ACTION --}}
                                            {{-- <a href="{{ route('gellary.edit',$gellary->id) }}" title="edit"><i class="fas fa-user-edit fa-lg edit_icon"></i></a> --}}

                                            <a href="{{ route('gellary.delete',$gellary->id) }}" id="delete" title="edit"><i class="fas fa-trash-alt fa-lg delete_icon"></i></a>
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
