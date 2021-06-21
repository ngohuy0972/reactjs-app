<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Search model -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Header Section Begin -->
<header class="header-section">
    <div class="container-fluid">
        <div class="inner-header">
            <div class="logo">
                <a href="{{asset('/')}}"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
            </div>
            <div class="header-right">
                <img src="{{asset('frontend/img/icons/search.png')}}" alt="" class="search-trigger">
                <a href="{{asset('/register')}}" style="margin-right: 15px;">
                    <img src="{{asset('frontend/img/icons/man.png')}}" alt="">
                </a>
                <a href="{{asset('/shopping-cart')}}">
                    <img src="{{asset('frontend/img/icons/bag.png')}}" alt="">
                    <span>2</span>
                </a>
            </div>
            {{-- <div class="user-access">
                <a href="{{asset('/register')}}">Register</a>
                <a href="{{asset('/login')}}" class="in">Log in</a>
            </div> --}}
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a class="active" href="{{asset('/')}}">Home</a></li>
                    <li><a href="{{asset('/shop')}}">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="{{asset('/')}}">Clothes</a></li>
                            <li><a href="{{asset('/')}}">Shoes</a></li>
                            <li><a href="{{asset('/')}}">Accesories</a></li>
                        </ul>
                    </li>
                    <li><a href="{{asset('/')}}">Blog</a></li>
                    <li><a href="{{asset('/')}}">About</a></li>
                    <li><a href="{{asset('/contact')}}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- Header Info Begin -->
{{-- <div class="header-info">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="header-item">
                    <img src="{{asset('frontend/img/icons/delivery.png')}}" alt="">
                    <p>Free shipping on orders over $30 in USA</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-lg-center">
                <div class="header-item">
                    <img src="{{asset('frontend/img/icons/voucher.png')}}" alt="">
                    <p>20% Student Discount</p>
                </div>
            </div>
            <div class="col-md-4 text-left text-xl-right">
                <div class="header-item">
                <img src="{{asset('frontend/img/icons/sales.png')}}" alt="">
                <p>30% off on dresses. Use code: 30OFF</p>
            </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Header Info End -->
<!-- Header End -->