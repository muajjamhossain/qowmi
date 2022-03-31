@extends('layouts.fontend_master')
@section('gellary') active @endsection
@section('content')
{{-- bradcumb --}}
<div class="about_bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{url('/')}}"><img src="{{ asset('content/fontend') }}/images/responsive-logo.png" class="responsive-logo img-fluid" alt="responsive-logo"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h1>{{ session()->get('language') == 'bangla' ? 'আমাদের গ্যালারি' :'Our Gellary' }}</h1>
            </div>
        </div>
    </div>
</div>
{{-- bradcumb --}}
{{-- php --}}
@php
  $gellary = App\Models\Gellary::orderBy('id','DESC')->get();
@endphp
{{-- php --}}
<div class="gallery-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="gallery-style">{{ session()->get('language') == 'bangla' ? 'আমাদের গ্যালারি' :'Our Gellary' }} </h3>
            </div>
        </div>
        <div class="row">
          @foreach ($gellary as $data)
            <div class="col-md-4">
                <a href="{{ asset($data->image_path) }}" class="grid image-link">
                    <figure class="effect-bubba gallery-img-wrap">
                        <img src="{{ asset($data->image_path) }}" class="img-fluid" alt="#">
                        <figcaption>
                            <p><i class="fa fa-search-plus fa-2x" aria-hidden="true"></i></p>
                        </figcaption>
                    </figure>
                </a>
            </div>
          @endforeach
        </div>
    </div>
</div>
{{-- do work --}}
@endsection
