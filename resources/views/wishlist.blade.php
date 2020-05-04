@extends('layouts.master')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Wishlist</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 @if(!(empty($products)))
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th></th>
                                    <th>Price</th>

                                   
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                    @foreach($products as $product) 
                                    <tr>
                                        <td class="cart-pic first-row"><img src="/storage/img/{{$product->image}}" style="height=200px;width:150px" alt=""></td>
                                        <td class="cart-title first-row">
                                        <h5>{{$product->name}} </h5>
                                        </td>

                                    <td><a href="/wishToCart/{{$product->id}}" class="primary-btn up-cart">Add To Cart</a></td>
                                    <td class="p-price first-row"> {{$product->price}} </td>
                                        
                                    <form action="/unlike/{{$product->id}}" method="Delete">
                                        <td class="close-td first-row"><button type="submit" class="ti-close"></button></td>
                                    </form>
                                    </tr> 
                                    @endforeach
                           
                            
                            </tbody>
                        </table>
                
                    </div>

                @else
                    <div class="container">
                        <h4> Sorry, you have not liked anything so far.</h4>
                    </div>

                @endif

                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="/shop" class="primary-btn continue-shop">Continue shopping</a>
                               
                            </div>
                            
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->


@endsection 