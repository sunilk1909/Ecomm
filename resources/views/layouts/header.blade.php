


    <!-- Header Section Begin -->
    <header class="header-section">
      
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="/home">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="/wishlist">
                                <i class="icon_heart_alt"></i>
                                    
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="/shoppingcart">
                                    <i class="icon_bag_alt"></i>
                                </a>
                            </li>
                            <li>
                            @auth
                               {{'Hi, '.(Auth::user()->name)}} 

                            @endauth 
                            @guest
                                {{'Hello'}}   
                            @endguest
                            </li>

                             
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.navbar')
    </header>
    <!-- Header End -->

