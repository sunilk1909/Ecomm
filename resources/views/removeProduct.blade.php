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
            
                <div class="col-lg-12 order-1 order-lg-2">
                    
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
                                           <a href="/removeProduct/{{$product->id}}"><i class="ti-close"></i></a>
                                       
                                        </div>
                  
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