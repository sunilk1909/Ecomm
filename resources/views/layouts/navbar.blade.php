<div class="nav-item">
    <div class="container">
        
        <nav class="nav-menu mobile-menu">
            <ul>
            <li class="{{Request::path() === 'home' ? 'active' : ' '}}"><a href=" {{route('home')}}">Home</a></li>
                <li class="{{Request::path() === 'shop' ? 'active' : ' '}}"><a href="/shop">Shop</a></li>
                {{-- <li class="{{Request::path() === 'blog' ? 'active' : ' '}}"><a href="/blog">Blog</a></li> --}}
                <li class="{{Request::path() === 'checkout' ? 'active' : ' '}}"><a href="/checkout">Checkout</a></li>
                <li class="{{Request::path() === 'contact' ? 'active' : ' '}}"><a href="/contact">Contact</a></li>
                <li class="{{Request::path() === 'try' ? 'active' : ' '}}"><a href="/try">Try it</a></li>
                <li><a href="#">User</a>
                    <ul class="dropdown">
                        
                        <li><a href="/shoppingcart">Shopping Cart</a></li>
                        <li><a href="/wishlist">wishlist</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                @can('admin')
                <li><a href="#">Admin</a>
                    <ul class="dropdown">
                        <li><a href="/makeProduct">makeProducts</a></li>
                        <li><a href="/removeProduct">Edit Products</a></li>
                        <li><a href="/message">Messages</a></li>
                    </ul>
                </li>
                @endcan
           
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
</div>