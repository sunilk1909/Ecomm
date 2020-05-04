@extends('layouts.master')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="img/hero-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Woman</span>
                            <h1>New Collection</h1>
                            <p>Hurry up, We got a brand new collection of women winter products. 
                                Free home delivery for all products of the collection for free. 
                            </p>
                            <a href="/shop" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="img/hero-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Bag,kids</span>
                            <h1>On deal now</h1>
                            <p>Upto 50% off on all the summer products of kids.Additional discounts apply. Come over and have a look. 
                                We will surely have something for you. 
                            </p>
                            <a href="/shop" class="primary-btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            
            <div class="row" >
               
              
                    <div class="col-lg-4" >
                        <form action="/shop" method="GET" id="male">
                            <input type="hidden" name="filter" value="Male">
                        </form>
                        <div class="single-banner" >
                            <img src="img/banner-1.jpg" alt="" >
                            <div class="inner-text">
                                <h4 onclick="document.getElementById('male').submit()">Man's</h4>
                            </div>
                        </div>
                     
                    </div>
                
                
                
                <div class="col-lg-4">
                    <form action="/shop" method="GET" id="female">
                        <input type="hidden" name="filter" value="Female">
                    </form>
                    <div class="single-banner">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4  onclick="document.getElementById('female').submit()" >Women’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="/shop" method="GET" id="kid">
                        <input type="hidden" name="filter" value="Children">
                    </form>
                    <div class="single-banner">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4  onclick="document.getElementById('kid').submit()">Kid’s</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>Women’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                    
                        @foreach ($products as $product)
                            @if($product->category == 'Female')
                               
                                  
                                    <div class="product-item">
                                        <div class="pi-pic">
                                        <img style="height:270px;width:330px" src="/storage/img/{{$product->image}}" alt="">
                                            @if($product->onSale == 1)
                                                <div class="sale">Sale</div> 
                                            @endif
                                            <div class="icon">
                                                <a href="/addToWishList?id={{$product->id}}">  <i class="icon_heart_alt"></i></a>
                                            </div>
                                            <ul>
                                                <li class="w-icon active"><a href="/addToCart?id={{$product->id }}"><i class="icon_bag_alt"></i></a></li>
                                                <li class="quick-view"><a href="#">+ Quick View</a></li>
                                                <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                        <div class="catagory-name">{{$product->type}}</div>
                                            <a href="#">
                                            <h5>{{$product->name}}</h5>
                                            </a>
                                            <div class="product-price">
                                                ${{$product->price}}
                                            </div>
                                        </div>
                                    </div>
                                
                               
                                
                                    
                                
                            @endif
                        @endforeach
                        
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

   
    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">
                        <ul>
                            <li class="active">Clothings</li>
                            <li>HandBag</li>
                            <li>Shoes</li>
                            <li>Accessories</li>
                        </ul>
                    </div>
                    <div class="product-slider owl-carousel">
                       
                        @foreach ($products as $product)
                            @if($product->category == 'Male')

                            <div class="product-item">
                                <div class="pi-pic">
                                <img style="height:270px;width:330px" src="/storage/img/{{$product->image}}" alt="">
                                    @if($product->onSale == '1')    
                                        <div class="sale">Sale</div>
                                    @endif
                                    <div class="icon">
                                        <a href="/addToWishList?id={{$product->id}}">  <i class="icon_heart_alt"></i></a>>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="/addToCart?id={{$product->id }}"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="#">+ Quick View</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                <div class="catagory-name">{{$product->type}}</div>
                                    <a href="#">
                                    <h5>{{$product->name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        ${{$product->price}}
                                        
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                       
                        
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">
                        <h2>Men’s</h2>
                        <a href="#">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Man Banner Section End -->

    <!-- Instagram Section Begin -->
    <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="img/insta-1.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-2.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-3.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-4.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-5.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/insta-6.jpg">
            <div class="inside-text">
                <i class="ti-instagram"></i>
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
    </div>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
          
            <div class="row">
             </div>
            <div class="benefit-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Free Shipping</h6>
                                <p>For all order over 99$</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-2.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Delivery On Time</h6>
                                <p>If good have prolems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-benefit">
                            <div class="sb-icon">
                                <img src="img/icon-1.png" alt="">
                            </div>
                            <div class="sb-text">
                                <h6>Secure Payment</h6>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection