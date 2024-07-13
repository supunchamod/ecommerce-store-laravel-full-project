
@extends('layouts.main')
@section('content')

 <!-- Home Section Start -->
 <section class="home-section-2 home-section-bg pt-0 overflow-hidden">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="slider-animate">
                        <div>
                            <div class="home-contain rounded-0 p-0">
                                <img src="../assets/images/grocery/banner/1.jpg"
                                    class="img-fluid bg-img blur-up lazyload" alt="">
                                <div class="home-detail home-big-space p-center-left home-overlay position-relative">
                                    <div class="container-fluid-lg">
                                        <div>
                                            <h6 class="ls-expanded theme-color text-uppercase">Weekend Special offer
                                            </h6>
                                            <h1 class="heding-2">Premium Quality Dry Fruits</h1>
                                            <h2 class="content-2">Dryfruits shopping made Easy</h2>
                                            <h5 class="text-content">Fresh & Top Quality Dry Fruits are available here!
                                            </h5>
                                            <button
                                                class="btn theme-bg-color btn-md text-white fw-bold mt-md-4 mt-2 mend-auto"
                                                onclick="location.href = 'shop-left-sidebar.html';">Shop Now <i
                                                    class="fa-solid fa-arrow-right icon"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->

    
    <!-- Banner Section Start -->
    <section class="banner-section banner-small ratio_65">
        <div class="container-fluid-lg">
            <div class="slider-4-banner no-arrow slick-height">
                <div>
                    <div class=" banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/grocery/banner/2.jpg" class="bg-img blur-up lazyload" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">50% Discount</h5>
                                <h4 class="fw-bold mb-0">Summer Ice Cream</h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/grocery/banner/3.jpg" class="img-fluid bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Today Special</h5>
                                <h4 class="fw-bold mb-0">Fruits Juice Series</h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/grocery/banner/4.jpg" class="blur-up lazyload bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Combo Offer</h5>
                                <h4 class="fw-bold mb-0">Eat Healthy Be Healthy </h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="banner-contain-3 hover-effect">
                        <a href="javascript:void(0)">
                            <img src="../assets/images/grocery/banner/5.jpg" class="blur-up lazyload bg-img" alt="">
                        </a>
                        <div class="banner-detail p-center-left w-75 banner-p-sm mend-auto">
                            <div>
                                <h5 class="fw-light mb-2">Amazing Deals</h5>
                                <h4 class="fw-bold mb-0">As Fresh As Fruit </h4>
                                <button onclick="location.href = 'shop-left-sidebar.html';"
                                    class="btn shop-now-button mt-3 ps-0 mend-auto theme-color fw-bold">Shop Now <i
                                        class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Category Section Start -->
    <section class="category-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Shop By Categories</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="category-slider-1 arrow-slider wow fadeInUp">
                    @foreach($categery as $data)
                        <div>
                            <div class="category-box-list">
                                <a href="shop-left-sidebar.html" class="category-name">
                                    <h4>{{$data->name}}</h4>
                                    <h6>25 items</h6>
                                </a>
                                <div class="category-box-view">
                                    <a href="shop-left-sidebar.html">
                                        <img src="{{ asset('assets/images/' . $data->image) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>
                                    <button onclick="location.href = 'shop-left-sidebar.html';" class="btn shop-button">
                                        <span>Shop Now</span>
                                        <i class="fas fa-angle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

        <!-- Product Fruit & Vegetables Section Start -->
        <section class="product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Drinks</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 arrow-slider img-slider">
                        @foreach($drinks as $data)
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('/media/product/' . $data->mainImage) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Add To Cart">
                                            <a href="javascript:void(0)" class="notifi-cart" data-product-id="{{ $data->id }}">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">{{ $data->productName}}</h5>
                                    </a>
                                    <h5 class="price theme-color">Rs:{{ $data->productPrice}}</h5>

                        <form action="{{ ('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $data->id }}">
                            <div class="addtocart_btn">
                                <button type="submit" class="add-button addcart-button btn buy-button text-light">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <div class="qty-box cart_qty">
                                    <div class="input-group">
                                        <button type="button" class="btn qty-left-minus" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="1">
                                        <button type="button" class="btn qty-right-plus" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Fruit & Vegetables Section End -->

    <!-- Banner Section Start -->
    <section class="bank-section overflow-hidden">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Bank & Wallet Offers</h2>
            </div>
            <div class="slider-bank-3 arrow-slider slick-height">
                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="../assets/images/grocery/bank/name/1.png" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2>GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/bank/price/1.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-1">
                            <h4>Code :
                                <input id="clipboardexample" value="MULTICART">
                            </h4>
                            <button type="button" class="bank-coupon btn" id="copyText" data-clipboard-action="copy"
                                data-clipboard-target="#clipboardexample">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="../assets/images/grocery/bank/name/2.png" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2 class="bank-offer-2">GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/bank/price/2.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-2">
                            <h4>Code :
                                <input id="clipboardexample1" value="MULTICART">
                            </h4>
                            <button class="bank-coupon btn" id="copyText1">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="../assets/images/grocery/bank/name/3.png" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2 class="bank-offer-3">GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/bank/price/3.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-3">
                            <h4>Code :
                                <input id="clipboardexample2" value="MULTICART">
                            </h4>
                            <button class="bank-coupon btn" id="copyText2">Copy Code</button>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bank-offer">
                        <div class="bank-header">
                            <div class="bank-left w-100">
                                <div class="bank-image">
                                    <img src="../assets/images/grocery/bank/name/1.png" class="img-fluid" alt="">
                                </div>
                                <div class="bank-name">
                                    <h2>GET 10% OFF</h2>
                                    <h5 class="discount text-content">When you spend $20</h5>
                                    <h5 class="valid text-content">Valid for 30 days</h5>
                                </div>
                            </div>

                            <div class="bank-right w-100">
                                <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/bank/price/1.svg" class="img-fluid" alt="">
                            </div>
                        </div>

                        <div class="bank-footer bank-footer-1">
                            <h4>Code :
                                <input id="clipboardexample3" value="MULTICART">
                            </h4>
                            <button class="bank-coupon btn" id="copyText3">Copy Code</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

     <!-- Deal Section Start -->
     <section class="product-section product-section-3">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Selling Items</h2>
            </div>
            <div class="row g-sm-4 g-3">
                <div class="col-xxl-4 col-lg-5 order-lg-2">
                    <div class="product-bg-image wow fadeInUp">
                        <div class="product-title product-warning">
                            <h2>Special Offer</h2>
                        </div>

                        <div class="product-box-4 product-box-3 rounded-0">
                            <div class="deal-box">
                                <div class="circle-box">
                                    <div class="shape-circle">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/grocery/circle.svg" class="blur-up lazyload" alt="">
                                        <div class="shape-text">
                                            <h6>Hot <br> Deal</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="top-selling-slider product-arrow">
                                <div>
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../assets/images/grocery/deal/big.png"
                                                class="img-fluid product-image blur-up lazyload" alt="">
                                        </a>

                                        <ul class="option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i class="iconly-Show icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="javascript:void(0)" class="notifi-wishlist">
                                                    <i class="iconly-Heart icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i class="iconly-Swap icli"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-detail text-center">
                                        <ul class="rating justify-content-center">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <a href="product-left-thumbnail.html">
                                            <h3 class="name w-100 mx-auto text-center">Unisex Small Trolley
                                                Suitcase</h3>
                                        </a>
                                        <h3 class="price theme-color d-flex justify-content-center">
                                            $65.21<del class="delete-price">$71.25</del>
                                        </h3>
                                        <div class="progress custom-progressbar">
                                            <div class="progress-bar" style="width: 79%" role="progressbar"></div>
                                        </div>
                                        <h5 class="text-content">Solid : <span class="text-dark">30 items</span>
                                            <span class="ms-auto text-content">Hurry up offer end in</span></h5>

                                        <div class="timer timer-2 ms-0 my-4" id="clockdiv-1" data-hours="1"
                                            data-minutes="2" data-seconds="3">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <div class="counter">
                                                        <div class="days">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="hours">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="minutes">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="seconds">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="../assets/images/grocery/deal/big.png"
                                                class="img-fluid product-image blur-up lazyload" alt="">
                                        </a>

                                        <ul class="option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i class="iconly-Show icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="javascript:void(0)" class="notifi-wishlist">
                                                    <i class="iconly-Heart icli"></i>
                                                </a>
                                            </li>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i class="iconly-Swap icli"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="product-detail text-center">
                                        <ul class="rating justify-content-center">
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star" class="fill"></i>
                                            </li>
                                            <li>
                                                <i data-feather="star"></i>
                                            </li>
                                        </ul>
                                        <a href="product-left-thumbnail.html">
                                            <h3 class="name w-100 mx-auto text-center text-title">Unisex Small Trolley
                                                Suitcase</h3>
                                        </a>
                                        <h3 class="price theme-color d-flex justify-content-center">
                                            $65.21<del class="delete-price">$71.25</del>
                                        </h3>
                                        <div class="progress custom-progressbar">
                                            <div class="progress-bar" style="width: 41%" role="progressbar"></div>
                                        </div>
                                        <h5 class="text-content">Solid : <span class="text-dark">30 items</span>
                                            <span class="ms-auto text-content">Hurry up offer end in</span></h5>

                                        <div class="timer timer-2 ms-0 my-4" id="clockdiv-2" data-hours="1"
                                            data-minutes="2" data-seconds="3">
                                            <ul class="d-flex justify-content-center">
                                                <li>
                                                    <div class="counter">
                                                        <div class="days">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="hours">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="minutes">
                                                            <h6></h6>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="counter">
                                                        <div class="seconds">
                                                            <h6></h6>
                                                        </div>
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

                <div class="col-xxl-8 col-lg-7 order-lg-1">
                    <div class="slider-5_2 img-slider">
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/1.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Potato Chips</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/2.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Body Lotion</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/3.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Nithara Coffee</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/4.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Cow Ghee</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/5.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fresh Cilantro</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/6.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Sandwich Bread</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/7.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Popcorn</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/5.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fresh Cilantro</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/8.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Fresh Eggs</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-box-4 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="../assets/images/grocery/deal/9.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">Tomato Ketchup</h5>
                                    </a>
                                    <h5 class="price theme-color">$65.21<del>$71.25</del></h5>
                                    <div class="addtocart_btn">
                                        <button class="add-button addcart-button btn buy-button text-light">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <div class="qty-box cart_qty">
                                            <div class="input-group">
                                                <button type="button" class="btn qty-left-minus" data-type="minus"
                                                    data-field="">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="1">
                                                <button type="button" class="btn qty-right-plus" data-type="plus"
                                                    data-field="">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->

    
    <!-- Offer Section Start -->
    <section class="offer-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="offer-box hover-effect">
                        <h2><span>FREE GIFT ANY ORDER</span> 70% oFF</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Section End -->

    <!-- Product Breakfast & Dairy Section Start -->
    <section class="product-section-4">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Breakfast & Dairy</h2>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="slider-7_1 arrow-slider img-slider">
                        @foreach($breakfast as $data)
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('/media/product/' . $data->mainImage) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">{{ $data->productName}}</h5>
                                    </a>
                                    <h5 class="price theme-color">Rs:{{ $data->productPrice}}</h5>

                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $data->id }}">
                            <div class="addtocart_btn">
                                <button type="submit" class="add-button addcart-button btn buy-button text-light">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <div class="qty-box cart_qty">
                                    <div class="input-group">
                                        <button type="button" class="btn qty-left-minus" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="1">
                                        <button type="button" class="btn qty-right-plus" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Breakfast & Dairy Section End -->

    <!-- Product Chemist Store Section Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Chemist Store</h2>
            </div>
            <div class="row">
                <div class="col-12">
                <div class="slider-7_1 arrow-slider img-slider">
                        @foreach($chemist as $data)
                        <div>
                            <div class="product-box-4 wow fadeInUp">
                                <div class="product-image product-image-2">
                                    <a href="product-left-thumbnail.html">
                                        <img src="{{ asset('/media/product/' . $data->mainImage) }}"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="javascript:void(0)" class="notifi-wishlist">
                                                <i class="iconly-Heart icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                            <a href="compare.html">
                                                <i class="iconly-Swap icli"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-left-thumbnail.html">
                                        <h5 class="name text-title">{{ $data->productName}}</h5>
                                    </a>
                                    <h5 class="price theme-color">Rs:{{ $data->productPrice}}</h5>

                        <form action="{{ route('cart.add') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $data->id }}">
                            <div class="addtocart_btn">
                                <button type="submit" class="add-button addcart-button btn buy-button text-light">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <div class="qty-box cart_qty">
                                    <div class="input-group">
                                        <button type="button" class="btn qty-left-minus" data-type="minus"
                                            data-field="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                        <input class="form-control input-number qty-input" type="text"
                                            name="quantity" value="1">
                                        <button type="button" class="btn qty-right-plus" data-type="plus"
                                            data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Chemist Store Section End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row gy-lg-0 gy-3">
                <div class="col-lg-6">
                    <div class="banner-contain-3 hover-effect">
                        <div>
                            <img src="../assets/images/grocery/banner/6.jpg" class="bg-img blur-up lazyload" alt="">
                            <div
                                class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
                                <div>
                                    <h2 class="text-great fw-normal text-danger">50% special offer</h2>
                                    <h3 class="mb-1 fw-bold">Chocolate Shake Back in <br class="d-sm-block d-none">
                                        Stock</h3>
                                    <h4 class="text-content">Offer Of the Week!</h4>
                                    <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
                                        onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="banner-contain-3 hover-effect">
                        <img src="../assets/images/grocery/banner/7.jpg" class="bg-img blur-up lazyload" alt="">
                        <div
                            class="banner-detail banner-detail-2 text-dark p-center-left w-75 banner-p-sm position-relative mend-auto">
                            <div>
                                <h2 class="text-great fw-normal text-danger">Special hot sale</h2>
                                <h3 class="mb-1 fw-bold">Healthy & Fresh Cool <br> Breakfast</h3>
                                <h4 class="text-content">Choose a Nutritious & Healthy Breakfast.</h4>
                                <button class="btn btn-md theme-bg-color text-white mt-sm-3 mt-1 fw-bold mend-auto"
                                    onclick="location.href = 'shop-left-sidebar.html';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->



    <!-- Service Section Start -->
    <section class="service-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-3 row-cols-xxl-5 row-cols-lg-3 row-cols-md-2">
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#shipping"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Free Shipping</h3>
                            <h6 class="text-content">Free Shipping world wide</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#service"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>24 x 7 Service</h3>
                            <h6 class="text-content">Online Service For 24 x 7</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#pay"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Online Pay</h3>
                            <h6 class="text-content">Online Payment Avaible</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#offer"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>Festival Offer</h3>
                            <h6 class="text-content">Super Sale Upto 50% off</h6>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-contain-2">
                        <svg class="icon-width">
                            <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/svg/service-icon-4.svg#return"></use>
                        </svg>
                        <div class="service-detail">
                            <h3>100% Original</h3>
                            <h6 class="text-content">100% Money Back</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Section End -->


<script>
$(".notifi-cart").on("click", function () {
    var productId = $(this).data('product-id'); // Ensure product ID is set in the data attribute
    $.ajax({
        url: '{{ route('cart.add') }}', // Make sure the route is correct
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}', // CSRF token for Laravel
            product_id: productId,
            quantity: 1 // Default quantity is 1
        },
        success: function(response) {
            if (response.success) {
                $.notify({
                    icon: "fa fa-check",
                    title: "Success!",
                    message: response.message,
                }, {
                    element: "body",
                    position: null,
                    type: "info",
                    allow_dismiss: true,
                    newest_on_top: false,
                    showProgressbar: true,
                    placement: {
                        from: "top",
                        align: "right",
                    },
                    offset: 20,
                    spacing: 10,
                    z_index: 1031,
                    delay: 5000,
                    animate: {
                        enter: "animated fadeInDown",
                        exit: "animated fadeOutUp",
                    },
                    icon_type: "class",
                    template: '<div data-notify="container" class="col-xxl-3 col-lg-5 col-md-6 col-sm-7 col-12 alert alert-{0}" role="alert">' +
                        '<button type="button" aria-hidden="true" class="btn-close" data-notify="dismiss"></button>' +
                        '<span data-notify="icon"></span> ' +
                        '<span data-notify="title">{1}</span> ' +
                        '<span data-notify="message">{2}</span>' +
                        '<div class="progress" data-notify="progressbar">' +
                        '<div class="progress-bar progress-bar-info progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
                        "</div>" +
                        '<a href="{3}" target="{4}" data-notify="url"></a>' +
                        "</div>",
                });
                loadCartDetails(); // Call function to reload cart details if needed
            }
        }
    });
});

</script>

    
@endsection