@extends('layouts.fontend_master')
@section('shop') active @endsection
@section('shop.details') active @endsection
@section('content')

<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('{{ asset('content/fontend') }}/img/demo/img8.png');">
    <div class="container">
        <div class="pagination-area">
            <h1> Shop Details</h1>
            <ul>
                <li><a href="{{ url('/') }}">Home</a> -</li>
                <li> Shop Details</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->

<!-- Shop Page 1 Area Start Here -->
<div class="shop-details-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                <div class="inner-shop-details">
                    <div class="product-details-info-area">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="inner-product-details-left">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active in" id="related1">
                                            <a href="#" class="zoom ex1"><img alt="single" src="{{ asset('content/fontend') }}/img/product/9.jpg" class="img-responsive"></a>
                                        </div>
                                        <div class="tab-pane fade" id="related2">
                                            <a href="#" class="zoom ex1"><img alt="single" src="{{ asset('content/fontend') }}/img/product/9.jpg" class="img-responsive"></a>
                                        </div>
                                        <div class="tab-pane fade" id="related3">
                                            <a href="#" class="zoom ex1"><img alt="single" src="{{ asset('content/fontend') }}/img/product/9.jpg" class="img-responsive"></a>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="active">
                                            <a href="#related1" data-toggle="tab" aria-expanded="false"><img alt="related1" src="{{ asset('content/fontend') }}/img/product/10.jpg" class="img-responsive"></a>
                                        </li>
                                        <li>
                                            <a href="#related2" data-toggle="tab" aria-expanded="false"><img alt="related2" src="{{ asset('content/fontend') }}/img/product/10.jpg" class="img-responsive"></a>
                                        </li>
                                        <li>
                                            <a href="#related3" data-toggle="tab" aria-expanded="false"><img alt="related3" src="{{ asset('content/fontend') }}/img/product/10.jpg" class="img-responsive"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="inner-product-details-right">
                                    <h3>Product Title Here</h3>
                                    <ul>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    </ul>
                                    <p class="price">$59.00</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus. Lorem ipsum
                                        dolor sit amet,
                                        consectetuer adipiscing elit.</p>
                                    <div class="product-details-content">
                                        <p><span>SKU:</span> 0010</p>
                                        <p><span>Availability:</span> In stock</p>
                                        <p><span>Category:</span> Demo Products</p>
                                    </div>
                                    <ul class="product-details-social">
                                        <li>Share on:</li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <ul class="inner-product-details-cart">
                                        <li><a href="#">Add To Cart</a></li>
                                        <li>
                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                <input type="text" name='quantity' class="form-control quantity-input" value="1" placeholder="1">
                                                <div class="input-group-btn-vertical">
                                                    <button class="btn btn-default quantity-plus" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                                    <button class="btn btn-default quantity-minus" type="button"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-details-tab-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul>
                                    <li class="active"><a href="#description" data-toggle="tab" aria-expanded="false">Description</a></li>
                                    <li><a href="#review" data-toggle="tab" aria-expanded="false">Review(0)</a></li>
                                    <li><a href="#add-tags" data-toggle="tab" aria-expanded="false">ADD TAGS</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="description">
                                        <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                                    </div>
                                    <div class="tab-pane fade" id="review">
                                        <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                                    </div>
                                    <div class="tab-pane fade" id="add-tags">
                                        <p>Porem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                                            ullamcorper suscipit
                                            lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h3 class="sidebar-title"><a href="#">Related Products</a></h3>
                    <div class="rc-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1"
                      data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                      data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true" data-r-large-dots="false">
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/1.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Robert - Philosophy</a></h3>
                                    <span class="item-price">$350</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/2.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">GMAT</a></h3>
                                    <span class="item-price">$250</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/3.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                    <span class="item-price">$430</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/4.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                    <span class="item-price">$190</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/1.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Money Book - Finance</a></h3>
                                    <span class="item-price">$430</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="single-item-wrapper">
                                <div class="publications-img-wrapper">
                                    <a href="#"><img class="img-responsive" src="{{ asset('content/fontend') }}/img/product/3.jpg" alt="product"></a>
                                </div>
                                <div class="publications-content-wrapper">
                                    <h3 class="item-title"><a href="#">Service Marketing</a></h3>
                                    <span class="item-price">$190</span>
                                </div>
                                <div class="buy-now-btn-area">
                                    <a href="#" class="ghost-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
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
<!-- Shop Page 1 Area End Here -->

@endsection
