@extends('layouts.fontend_master')
@section('teachers') active @endsection
@section('teacher.details') active @endsection
@section('content')

<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('{{ asset('content/fontend') }}/img/demo/img8.png');">
    <div class="container">
        <div class="pagination-area">
            <h1> Teachers Details</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a> -</li>
                <li> Teachers Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Courses Page 3 Area Start Here -->
<div class="lecturers-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="lecturers-contact-info">
                    <img src="{{ asset('content/fontend') }}/img/demo/img9.png" class="img-responsive" alt="team">
                    <h2>John Rojario</h2>
                    <h3>Political Science</h3>
                    <ul class="lecturers-social2">
                        <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="lecturers-contact">
                        <li><i class="fa fa-phone" aria-hidden="true"></i>+61 3 8376 6284</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i>academics@gmail.co</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <h3 class="title-default-left title-bar-big-left-close">About Me</h3>
                <p>Eimply dummy text of the printing and typesetting industry. Eimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text type and scrambled it to make a type specimen book.
                    Eimply
                    dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Eimply dummy text of the printing and typesetting
                    industry. Lorem
                    Ipsum has been the industry's standard dummy text type and scrambled it to make a type specimen book. </p>
                <h3 class="title-default-left title-bar-big-left-close">Qualifications</h3>
                <ul class="course-feature2">
                    <li>Research the conditions of urbanism</li>
                    <li>Employ advanced design techniques</li>
                    <li>Lens of landscape theory and design practice</li>
                    <li>Employ advanced design techniques</li>
                    <li>Innovative methodologies</li>
                </ul>
                <div class="leave-comments">
                    <h3 class="title-default-left title-bar-big-left-close">Contact With Me</h3>
                    <div class="row">
                        <div class="contact-form">
                            <form>
                                <fieldset>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea placeholder="Comment" class="textarea form-control" id="form-message" rows="8" cols="20"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group margin-bottom-none">
                                            <button type="submit" class="view-all-accent-btn">Post Comment</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Page 3 Area End Here -->

@endsection
