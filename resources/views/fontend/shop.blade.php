@extends('layouts.fontend_master')
@section('shop') active @endsection
@section('shop.all') active @endsection
@section('content')

<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('{{ asset('content/fontend') }}/img/demo/img8.png');">
    <div class="container">
        <div class="pagination-area">
            <h1> Shop</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a> -</li>
                <li> Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Shop Page 2 Area Start Here -->
<div class="shop-page2-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="courses-page-top-area">
                            <div class="courses-page-top-left">
                                <p>Showing 13-24 of 50 results</p>
                            </div>
                            <div class="courses-page-top-right">
                                <ul>
                                    <li><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                                    <li class="active"><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="gried-view">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/1.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">Robert - Philosophy</a></h3>
                                        <span>$140.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <div class="hot-sale">
                                            <span>Sale</span>
                                        </div>
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/2.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">GMAT</a></h3>
                                        <span><span>$390.00</span>$370.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/3.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">Money Book - Finance</a></h3>
                                        <span><span>$200.00</span>$230.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <div class="hot-sale">
                                            <span>Sale</span>
                                        </div>
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/4.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">Service Marketing</a></h3>
                                        <span>$310.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <div class="hot-sale">
                                            <span>Sale</span>
                                        </div>
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/5.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">GMAT</a></h3>
                                        <span>$240.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/6.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">IELTS</a></h3>
                                        <span>$180.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/7.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">Service Marketing</a></h3>
                                        <span>$290.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/8.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">Robert - Philosophy</a></h3>
                                        <span>$410.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-box1">
                                    <ul class="product-social">
                                        <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="product-img-holder">
                                        <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/9.jpg" alt="product"></a>
                                    </div>
                                    <div class="product-content-holder">
                                        <h3><a href="#">Writing and Marketing</a></h3>
                                        <span>$150.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Listed product show -->
                        <div role="tabpanel" class="tab-pane active" id="list-view">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-box2">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/3.jpg" alt="product" />
                                        </a>
                                        <div class="media-body">
                                            <div class="product-box2-content">
                                                <h3><a href="#">Money Book - Finance</a></h3>
                                                <span>$260.00</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make
                                                    a type specimen book.</p>
                                            </div>
                                            <ul class="product-box2-cart">
                                                <li><a href="#">Add To Cart</a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box2">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/4.jpg" alt="product" />
                                        </a>
                                        <div class="media-body">
                                            <div class="product-box2-content">
                                                <h3><a href="#">Service Marketing</a></h3>
                                                <span>$390.00</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make
                                                    a type specimen book.</p>
                                            </div>
                                            <ul class="product-box2-cart">
                                                <li><a href="#">Add To Cart</a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box2">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/7.jpg" alt="product" />
                                        </a>
                                        <div class="media-body">
                                            <div class="product-box2-content">
                                                <h3><a href="#">Finance Service</a></h3>
                                                <span>$400.00</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make
                                                    a type specimen book.</p>
                                            </div>
                                            <ul class="product-box2-cart">
                                                <li><a href="#">Add To Cart</a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-box2">
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/9.jpg" alt="product" />
                                        </a>
                                        <div class="media-body">
                                            <div class="product-box2-content">
                                                <h3><a href="#">Writing and Marketing</a></h3>
                                                <span>$350.00</span>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                                    and scrambled it to make
                                                    a type specimen book.</p>
                                            </div>
                                            <ul class="product-box2-cart">
                                                <li><a href="#">Add To Cart</a></li>
                                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="pagination-center">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-9">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-find-course">
                                <form id="checkout-form">
                                    <div class="form-group course-name">
                                        <input id="first-name" placeholder="Course Name" class="form-control" type="text" />
                                    </div>
                                    <div class="form-group">
                                        <button class="sidebar-search-btn disabled" type="submit" value="Login">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Class Categories</h3>
                            <ul class="sidebar-categories">
                                <li><a href="#">GMAT</a></li>
                                <li><a href="#">IELTS</a></li>
                                <li><a href="#">Regular MBA</a></li>
                                <li><a href="#">BBA</a></li>
                                <li><a href="#">CSE</a></li>
                                <li><a href="#">Diploma</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Search By Price</h3>
                            <div id="price-range-wrapper" class="price-range-wrapper">
                                <div id="price-range-filter"></div>
                                <div class="price-range-select">
                                    <div class="price-range" id="price-range-min"></div>
                                    <div class="price-range" id="price-range-max"></div>
                                </div>
                                <button class="ghost-full-width-btn disabled" type="submit" value="Login">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Best Seller</h3>
                            <div class="sidebar-best-seller-area">
                                <ul>
                                    <li>
                                        <div class="related-img">
                                            <a href="#"><img src="{{ asset('content/fontend') }}/img/sidebar/11.jpg" class="img-responsive" alt="related"></a>
                                        </div>
                                        <div class="related-content">
                                            <h4><a href="#">Marketing Book</a></h4>
                                            <ul class="rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>$159</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="related-img">
                                            <a href="#"><img src="{{ asset('content/fontend') }}/img/sidebar/12.jpg" class="img-responsive" alt="related"></a>
                                        </div>
                                        <div class="related-content">
                                            <h4><a href="#">Srater Marketer</a></h4>
                                            <ul class="rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>$200</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="related-img">
                                            <a href="#"><img src="{{ asset('content/fontend') }}/img/sidebar/13.jpg" class="img-responsive" alt="related"></a>
                                        </div>
                                        <div class="related-content">
                                            <h4><a href="#">Finance Book</a></h4>
                                            <ul class="rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            </ul>
                                            <p>$120</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Courses Page 1 Area End Here -->

@endsection
