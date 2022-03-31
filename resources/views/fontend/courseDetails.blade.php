@extends('layouts.fontend_master')
@section('course') active
@endsection
@section('content')
{{-- do work --}}
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
                <h1>{{ (session()->get('language') == 'bangla') ? 'কোর্সের বিবরণ' : 'Courses Details' }}</h1>
            </div>
        </div>
    </div>
</div>
{{-- bradcumb --}}
<section class="admission_cources">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <h2>{{ (session()->get('language') == 'bangla') ? $course->course_name_bn : $course->course_name_en }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
              @if($course->thumbnail == NULL)
                <img src="{{ asset('content/fontend') }}/images/admission-detail/admission-detail_img.jpg" class="img-fluid" alt="#">
              @else
                <img src="{{ asset($course->thumbnail) }}" class="img-fluid" alt="#">
              @endif

            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-lg-6">
                <div class="admission_discription">
                    <h4>{{ (session()->get('language') == 'bangla') ? $course->course_name_bn : $course->course_name_en }}</h4>
                    <p>{{ (session()->get('language') == 'bangla') ? $course->description_bn : $course->description_en }}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <ul class="admission_rating">
                    <li class="admission_star-second">{{ (session()->get('language') == 'bangla') ? 'শুরু' : 'Starts' }}<span>:</span></li>
                    <li class="admission_star">{{ $course->start_date }} </li>

                    <li>{{ (session()->get('language') == 'bangla') ? 'সময়কাল' : 'Duration' }}<span>:</span></li>
                    <li class="admission_star">{{ $course->duration }} {{ (session()->get('language') == 'bangla') ? 'দিন' : 'Days' }}</li>

                    <li class="admission_star-second">{{ (session()->get('language') == 'bangla') ? 'টাইমিং' : 'Timing' }}<span>:</span></li>
                    <li class="admission_star">{{ $course->class_time_in }} - {{ $course->class_time_out }}</li>

                    <li>{{ (session()->get('language') == 'bangla') ? 'ফি' : 'Fees' }}<span>:</span></li>
                    <li class="admission_star">{{ $course->ragular_price }}</li>

                    <li>{{ (session()->get('language') == 'bangla') ? 'ছাড়' : 'Discount' }}<span>:</span></li>
                    <li class="admission_star">{{ $course->discount_price }}</li>
                </ul>

                <div class="admission_share-icon">
                    <h4>{{ (session()->get('language') == 'bangla') ? 'কোর্স শেয়ার করুন' : 'Share Course' }}</h4>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="instafeed"></div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="subscribe">
                    <h3>Newsletter</h3>
                    <form id="subscribeform" action="https://demo.web3canvas.com/themeforest/unisco/php/subscribe.php" method="post">
                        <input class="signup_form" type="text" name="email" placeholder="Enter Your Email Address">
                        <button type="submit" class="btn btn-warning" id="js-subscribe-btn">SUBSCRIBE</button>
                        <div id="js-subscribe-result" data-success-msg="Success, Please check your email." data-error-msg="Oops! Something went wrong"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="index.html">
                        <img src="{{ asset('content/fontend') }}/images/footer-logo.png" class="img-fluid" alt="footer_logo">
                    </a>
                    <p>2016 © copyright
                        <br> All rights reserved.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="sitemap">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="admission-form.html">Admissions </a></li>
                        <li><a href="admission.html">Academics</a></li>
                        <li><a href="research.html">Research</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tweet_box">
                    <h3>Tweets</h3>
                    <div class="tweet-wrap">
                        <div class="tweet"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="address">
                    <h3>Contact us</h3>
                    <p><span>Address: </span> Unisco university Albany, NY, USA. 11001</p>
                    <p>Email : <a href="https://demo.web3canvas.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7910171f16390c17100a1a16571a1614">[email&#160;protected]</a>
                        <br> Phone : +91 555 668 986
                    </p>
                    <ul class="footer-social-icons">
                        <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

{{-- do work --}}
@endsection
