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
                        <span>Shopping Cart</span>
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
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="Remove"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sub = 0;
                                ?>
                               
                                @foreach($products as $product)
                                <?php 
                                $sub = $sub + ($product->price);
                                 ?>
                                   
                                <tr id ="product">
                                    <td class="cart-pic first-row"><img src="/storage/img/{{$product->image}}"  style="height=200px;width:150px" alt=""></td>
                                    <td class="cart-title first-row">
                                    <h5>{{$product->name}}</h5>
                                    </td>
                                <td class="p-price first-row"  id="price">${{$product->price}}</td>
                                <td class="qua-col first-row" onclick="total({{$product->price}},{{$product->name}})">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                            <input type="integer" id="{{$product->price}}" value="1"/>
                                            </div>
                                        </div>
                                </td>
                                
                                <td class="total-price first-row"  id="{{$product->name}}">${{$product->price}}</td>                      
                               
                                <td class="close-td first-row"><a href="/remove?id={{$product->id}}"><i class="ti-close"></i></a></td>
                                </tr>
                                 @endforeach
                                 
                            </tbody>
                        </table>
                    </div>
                    

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="/shop" class="primary-btn continue-shop">Continue shopping</a>
                                <a href="/shoppingcart" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal" >Subtotal <span id="subtotal"><?php echo $sub.".00" ?></span></li>
                                    <li class="cart-total">Total <span id ="total">$<?php echo $sub.".00" ?></span></li>
                                </ul>
                                <a href="/checkout" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    <!-- Shopping Cart Section End -->


@endsection 