@extends('layouts.master')
@section('content') 
<!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <form method ="get" action="/shop">
                <input type= "hidden" name="filter" value="filter"/>
            <div class="row">
        
                @csrf
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                   
                    <div class="filter-widget">
                        <h4 class="fw-title ">Category</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                    <select class="form-control" id="category" name="category">
                                    <option>Male</option>
                                    <option>Female</option>    
                                    <option>Children</option>
                                    </select>
                            </div>
                        </div>
                    </div>

                    <div class="filter-widget">
                        <h4 class="fw-title ">Brand</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                    <select class="form-control" id="brand" name="brand">
                                    <option>Calvin</option>
                                    <option>Denim</option>    
                                    <option>Polo</option>
                                    <option>Tommy</option>
                                    <option>Diesel</option>
                                    <option>Nike</option>
                                    <option>Addidas</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    
                   
                    <div class="filter-widget">
                        <h4 class="fw-title ">Size</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                    <select class="form-control" id="size" name="size">
                                    <option>S</option>
                                    <option>M</option>    
                                    <option>L</option>
                                    <option>XL</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="filter-widget">
                        <h4 class="fw-title ">Tags</h4>
                        <div class="fw-brand-check">
                            <div class="bc-item">
                                    <select class="form-control" id="Tags" name="Tags">
                                    <option>Sport</option>
                                    <option>Casual</option>    
                                    <option>Beachwear</option>
                                    <option>Dress</option>
                                    <option>Shoes</option>
                                    <option>Bags</option>
                                    <option>Coat</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="filter-btn">Filter</button>
                </div>
            </form>
           
                <div class="col-lg-9 order-1 order-lg-2">
                    
                    <div class="product-list">
                        <div class="row">
                       @if($products->isEmpty())
                       <h4>Sorry We dont have anything with your specifications.</h4>
                        @endif
                           
                            @foreach($products as $product)
                            
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                    <img  style="height:300px;width:370px" src="/storage/img/{{$product->image}}"   alt="">
                                        @if($product->onSale == 1)
                                        <div class="sale pp-sale">Sale</div>
                                        @endif
                                        <div class="icon">
                                        <a href="/addToWishList?id={{$product->id}}">  <i class="icon_heart_alt"></i></a>
                                        </div>
                                        <ul>

                                          
                                                
                                        <li class="w-icon active"><a href="/addToCart?id={{$product->id }}"><i class="icon_bag_alt"></i></a> </li>
                                        <li class="quick-view"><a href="#">+ Quick View</a></li>
                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->type}}</div>
                                        <a href="#">
                                        <h5>{{$product->color}}</h5>
                                        </a>
                                        <div class="product-price">
                                           ${{$product->price}}
                                            <span>{{--  WIll HAve reducted Price --}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="loading-more">
                        
                           {{$products->links()}}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

    @endsection