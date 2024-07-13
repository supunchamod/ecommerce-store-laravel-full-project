
@extends('layouts.main')
@section('content')


    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Shop Right Sidebar</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Shop Right Sidebar</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Category Section Start -->
    <section class="wow fadeInUp">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-7_1 no-space shop-box no-arrow">
                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Vegetables & Fruit</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Beverages</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Meats & Seafood</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Breakfast</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Frozen Foods</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Milk & Dairies</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/pet.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Pet Food</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Biscuits & Snacks</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Grocery & Staples</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->

    <!-- Shop Section Start -->
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-custom-3 wow fadeInUp">
                    <div class="left-box">
                        <div class="shop-left-sidebar">
                            <div class="back-button">
                                <h3><i class="fa-solid fa-arrow-left"></i> Back</h3>
                            </div>

                            <div class="filter-category">
                                <div class="filter-title">
                                    <h2>Filters</h2>
                                    <a href="javascript:void(0)">Clear All</a>
                                </div>
                                <ul>
                                @foreach($categery as $data)
                                    <li>
                                        <a href="javascript:void(0)">{{ $data->name}}</a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>

                            <div class="accordion custom-accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne">
                                            <span>Categories</span>
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="form-floating theme-form-floating-2 search-box">
                                                <input type="search" class="form-control" id="search"
                                                    placeholder="Search ..">
                                                <label for="search">Search</label>
                                            </div>

                                            <ul class="category-list custom-padding custom-height">
                                            @foreach($categery as $data)
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox" id="fruit">
                                                        <label class="form-check-label" for="fruit">
                                                            <span class="name">{{ $data->name}}</span>
                                                            <span class="number">(15)</span>
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            <span>Price</span>
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <div class="range-slider">
                                                <input type="text" class="js-range-slider" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            <span>Discount</span>
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul class="category-list custom-padding">
                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            <span class="name">upto 5%</span>
                                                            <span class="number">(06)</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault1">
                                                        <label class="form-check-label" for="flexCheckDefault1">
                                                            <span class="name">5% - 10%</span>
                                                            <span class="number">(08)</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault2">
                                                        <label class="form-check-label" for="flexCheckDefault2">
                                                            <span class="name">10% - 15%</span>
                                                            <span class="number">(10)</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault3">
                                                        <label class="form-check-label" for="flexCheckDefault3">
                                                            <span class="name">15% - 25%</span>
                                                            <span class="number">(14)</span>
                                                        </label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check ps-0 m-0 category-list-box">
                                                        <input class="checkbox_animated" type="checkbox"
                                                            id="flexCheckDefault4">
                                                        <label class="form-check-label" for="flexCheckDefault4">
                                                            <span class="name">More than 25%</span>
                                                            <span class="number">(13)</span>
                                                        </label>
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

                <div class="col-custom- wow fadeInUp">
                    <div class="show-button">
                        <div class="filter-button-group mt-0">
                            <div class="filter-button d-inline-block d-lg-none">
                                <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                            </div>
                        </div>

                        <div class="top-filter-menu">
                            <div class="category-dropdown">
                                <h5 class="text-content">Sort By :</h5>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown">
                                        <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="pop" href="javascript:void(0)">Popularity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="rating" href="javascript:void(0)">Average
                                                Rating</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="off" href="javascript:void(0)">% Off - Hight To
                                                Low</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="grid-option d-none d-md-block">
                                <ul>
                                    <li class="three-grid">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn d-xxl-inline-block d-none active">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-4.svg"
                                                class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid.svg"
                                                class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/list.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div
                        class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">

                        @foreach($product as $data)
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{route('product-detail',$data->slug)}}">
                                            <img src="{{ asset('/media/product/' . $data->mainImage) }}"
                                                class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">{{$data->category->name}}</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">{{$data->productName}}</h5>
                                        </a>
                                        <p class="text-content mt-1 mb-2 product-content"></p>
                                        <div class="product-rating mt-2">
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
                                            <span>(4.0)</span>
                                        </div>
                                        <h6 class="unit">250 ml</h6>
                                        <h5 class="price"><span class="theme-color">{{$data->productPrice}}</span> <del>$15.15{{$data->productOldPrice}}</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <a href=""><button class="btn btn-add-cart addcart-button">Add To Cart
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-cart"></i>
                                                </span>
                                            </button> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <nav class="custom-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

@endsection