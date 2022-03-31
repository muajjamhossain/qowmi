<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Qaumi University(Proposed)</title>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    {{--  --}}
    <link rel="stylesheet" href="{{ asset('content/fontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('content/fontend') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('content/fontend') }}/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{ asset('content/fontend') }}/css/slick.css">
    <link rel="stylesheet" href="{{ asset('content/fontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('content/fontend') }}/css/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('content/fontend') }}/css/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('content/fontend') }}/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('content/fontend') }}/css/set2.css" />

    <link href="{{ asset('content/fontend') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('content/fontend') }}/css/custom.css" rel="stylesheet">
    {{-- jquery --}}
    <script src="{{ asset('content/fontend') }}/js/jquery.min.js"></script>
    {{-- jquery --}}
</head>

<body>
    {{-- top bar --}}
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <img src="as" alt="">
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        @if (session()->get('language') == 'bangla')
                            <a href="{{ route('english.language') }}">English </a>/
                        @else
                            <a href="{{ route('bangla.language') }}">বাংলা </a>/
                        @endif

                        <a href="{{ route('login') }}"> {{ session()->get('language') == 'bangla' ? 'লগইন' :'Login' }}  </a>

                        {{-- <a href="#"> Sign Up </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- top bar under --}}
    <div data-toggle="affix" class="main__menu">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="{{ url('/') }}" class="navbar-brand nav-brand2 brand_logo">
                            <img src="{{ asset('content/fontend') }}/images/logo2.jpg" alt="">
                            <div class="brand_logo_text">
                              @if(session()->get('language') == 'bangla')
                                <span>কওমি বিশ্ববিদ্যালয়</span>
                                <span>প্রস্তাবিত</span>
                              @else
                                <span>Qaumiuniversity</span>
                                <span>Proposed</span>
                              @endif
                            </div>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link @yield('home')" href="{{ url('/') }}">@if(session()->get('language') == 'bangla') হোম @else Home @endif<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @yield('about')" href="{{ route('about') }}">@if(session()->get('language') == 'bangla') এবাউট @else About @endif<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @yield('course')" href="{{ route('course') }}">@if(session()->get('language') == 'bangla') কোর্স @else Course @endif<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link @yield('gellary')" href="{{ route('gellary') }}">@if(session()->get('language') == 'bangla') গ্যালারি @else Gellary @endif<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html"> @if(session()->get('language') == 'bangla') ইভেন্ট @else Event @endif <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">@if(session()->get('language') == 'bangla') যোগাযোগ @else Contact @endif</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe">
                        <h3>Newsletter</h3>
                        <form id="subscribeform" action="#" method="post">
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
                        <a href="{{ url('/') }}" class="navbar-brand nav-brand2 brand_logo" style="display:inherit">
                            <img src="{{ asset('content/fontend') }}/images/logo2.jpg" alt="">
                        </a>
                        <p>2022 © copyright
                            <br> All rights Qaumiuniversity(Proposed).
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="sitemap">
                        <h3>Navigation</h3>
                        <ul>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="#">Admissions </a></li>
                            <li><a href="{{ route('course') }}">Academics</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
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
                        <p>Email : <a href="#" class="__cf_email__">saiful777.info</a>
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
    </footer>
    {{-- script --}}

    <script src="{{ asset('content/fontend') }}/js/tether.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/slick.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/counterup.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/instafeed.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/jquery.magnific-popup.js"></script>
    <script src="{{ asset('content/fontend') }}/js/validate.js"></script>
    <script src="{{ asset('content/fontend') }}/js/tweetie.min.js"></script>
    <script src="{{ asset('content/fontend') }}/js/subscribe.js"></script>
    <script src="{{ asset('content/fontend') }}/js/script.js"></script>
</body>
</html>
