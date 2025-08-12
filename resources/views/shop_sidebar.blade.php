@extends('layouts.front.app')

@section('title', 'Product Details')

@section('css')
    <style>
       
    </style>
@endsection

@section('content')
        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container">
                <div class="tf-shop-control">
                    <div class="tf-control-filter">
                        <button id="filterShop" class="filterShop tf-btn-filter"><span class="icon icon-filter"></span><span class="text">Filters</span></button>
                        <div class="d-none d-lg-flex shop-sale-text">
                            <i class="icon icon-checkCircle"></i>
                            <p class="text-caption-1">Shop sale items only</p>
                        </div>
                    </div>
                    <ul class="tf-control-layout">
                        <li class="tf-view-layout-switch sw-layout-list list-layout" data-value-layout="list">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                    <rect x="7.5" y="3.5" width="12" height="5" rx="2.5" stroke="#181818"></rect>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                    <rect x="7.5" y="11.5" width="12" height="5" rx="2.5" stroke="#181818"></rect>
                                </svg>     
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-2" data-value-layout="tf-col-2">
                            <div class="item">
                                <svg class="icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="6" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="14" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="6" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="14" cy="14" r="2.5" stroke="#181818"></circle>
                                </svg>   
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-3 active" data-value-layout="tf-col-3">
                            <div class="item">
                                <svg class="icon" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818"></circle>
                                </svg>                                    
                            </div>
                        </li>
                        <li class="tf-view-layout-switch sw-layout-4" data-value-layout="tf-col-4">
                            <div class="item">
                                <svg class="icon" width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="3" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="27" cy="6" r="2.5" stroke="#181818"></circle>
                                    <circle cx="3" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="11" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="19" cy="14" r="2.5" stroke="#181818"></circle>
                                    <circle cx="27" cy="14" r="2.5" stroke="#181818"></circle>
                                </svg>
                            </div>
                        </li>
                    </ul>
                    <div class="tf-control-sorting">
                        <p class="d-none d-lg-block text-caption-1">Sort by:</p>
                        <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                            <div class="btn-select">
                                <span class="text-sort-value">Best selling</span>
                                <span class="icon icon-arrow-down"></span>
                            </div>
                            <div class="dropdown-menu">
                                <div class="select-item" data-sort-value="best-selling">
                                    <span class="text-value-item">Best selling</span>
                                </div>
                                <div class="select-item" data-sort-value="a-z">
                                    <span class="text-value-item">Alphabetically, A-Z</span>
                                </div>
                                <div class="select-item" data-sort-value="z-a">
                                    <span class="text-value-item">Alphabetically, Z-A</span>
                                </div>
                                <div class="select-item" data-sort-value="price-low-high">
                                    <span class="text-value-item">Price, low to high</span>
                                </div>
                                <div class="select-item" data-sort-value="price-high-low">
                                    <span class="text-value-item">Price, high to low</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-control-shop gridLayout-wrapper">
                    <div class="meta-filter-shop" style="display: none;">
                        <div id="product-count-grid" class="count-text"><span class="count">18</span> Products Found</div>
                        <div id="product-count-list" class="count-text"><span class="count">8</span> Products Found</div>
                        <div id="applied-filters"></div>
                        <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="sidebar-filter canvas-filter left">
                                <div class="canvas-wrapper">
                                    <div class="canvas-header d-flex d-xl-none">
                                        <h5>Filters</h5>
                                        <span class="icon-close close-filter"></span>
                                    </div>
                                    <div class="canvas-body">
                                        <div class="widget-facet facet-categories">
                                            <h6 class="facet-title">Product Categories</h6>
                                            <ul class="facet-content">
                                                <li><a href="#" class="categories-item">Bags <span class="count-cate">(112)</span></a></li>
                                                <li><a href="#" class="categories-item">Booking <span class="count-cate">(32)</span> </a></li>
                                                <li><a href="#" class="categories-item">Clothing <span class="count-cate">(42)</span></a></li>
                                                <li><a href="#" class="categories-item active">Women <span class="count-cate">(65)</span></a></li>
                                                <li><a href="#" class="categories-item">Men <span class="count-cate">(13)</span></a></li>
                                                <li><a href="#" class="categories-item">Shoes <span class="count-cate">(52)</span></a></li>
                                                <li><a href="#" class="categories-item">Uncategorized <span class="count-cate">(14)</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="widget-facet facet-price">
                                            <h6 class="facet-title">Price</h6>
                                            <div class="price-val-range noUi-target noUi-ltr noUi-horizontal" id="price-value-range" data-min="0" data-max="500"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0%, 0px) scale(1, 1);"></div></div><div class="noUi-origin" style="transform: translate(-100%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="500.0" aria-valuenow="0.0" aria-valuetext="0"></div></div><div class="noUi-origin" style="transform: translate(0%, 0px); z-index: 4;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="500.0" aria-valuenow="500.0" aria-valuetext="500"></div></div></div></div>
                                            <div class="box-price-product">
                                                <div class="box-price-item">
                                                    <span class="title-price">Min price</span>
                                                    <div class="price-val" id="price-min-value" data-currency="$">0</div>
                                                </div>
                                                <div class="box-price-item">
                                                    <span class="title-price">Max price</span>
                                                    <div class="price-val" id="price-max-value" data-currency="$">500</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-facet facet-size">
                                            <h6 class="facet-title">Size</h6>
                                            <div class="facet-size-box size-box">
                                                <span class="size-item size-check">XS</span>
                                                <span class="size-item size-check">S</span>
                                                <span class="size-item size-check">M</span>
                                                <span class="size-item size-check">L</span>
                                                <span class="size-item size-check">XL</span>
                                                <span class="size-item size-check">2XL</span>
                                                <span class="size-item size-check">3XL</span>
                                                <span class="size-item size-check free-size">Free Size</span>
                                            </div>
                                        </div>
                                        <div class="widget-facet facet-color">
                                            <h6 class="facet-title">Colors</h6>
                                            <div class="facet-color-box">
                                                <div class="color-item color-check"><span class="color bg-light-pink-2"></span>Pink</div>
                                                <div class="color-item color-check"><span class="color bg-red"></span> Red</div>
                                                <div class="color-item color-check"><span class="color bg-beige-2"></span>Beige</div>
                                                <div class="color-item color-check"><span class="color bg-orange-2"></span>Orange</div>
                                                <div class="color-item color-check"><span class="color bg-light-green"></span>Green</div>
                                                <div class="color-item color-check"><span class="color bg-main"></span>Black</div>
                                                <div class="color-item color-check"><span class="color bg-white line-black"></span>White</div>
                                                <div class="color-item color-check"><span class="color bg-purple-3"></span>Purple</div>
                                                <div class="color-item color-check"><span class="color bg-grey"></span>Grey</div>
                                                <div class="color-item color-check"><span class="color bg-light-blue-5"></span>Light Blue</div>
                                                <div class="color-item color-check"><span class="color bg-dark-blue"></span>Dark Blue</div>            
                                            </div>
                                        </div>
                                        <div class="widget-facet facet-fieldset">
                                            <h6 class="facet-title">Availability</h6>
                                            <div class="box-fieldset-item">
                                                <fieldset class="fieldset-item">
                                                    <input type="radio" name="availability" class="tf-check" id="inStock">
                                                    <label for="inStock">In stock <span class="count-stock">(32)</span></label>
                                                </fieldset>
                                                <fieldset class="fieldset-item">
                                                    <input type="radio" name="availability" class="tf-check" id="outStock">
                                                    <label for="outStock">Out of stock <span class="count-stock">(2)</span></label>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="widget-facet facet-fieldset">
                                            <h6 class="facet-title">Brands</h6>
                                            <div class="box-fieldset-item">
                                                <fieldset class="fieldset-item">
                                                    <input type="checkbox" name="brand" class="tf-check" id="nike">
                                                    <label for="nike">Nike <span class="count-brand">(112)</span></label>
                                                </fieldset>
                                                <fieldset class="fieldset-item">
                                                    <input type="checkbox" name="brand" class="tf-check" id="LV">
                                                    <label for="LV">Louis Vuitton <span class="count-brand">(2)</span></label>
                                                </fieldset>
                                                <fieldset class="fieldset-item">
                                                    <input type="checkbox" name="brand" class="tf-check" id="hermes">
                                                    <label for="hermes">Hermes <span class="count-brand">(42)</span></label>
                                                </fieldset>
                                                <fieldset class="fieldset-item">
                                                    <input type="checkbox" name="brand" class="tf-check" id="gucci">
                                                    <label for="gucci">Gucci <span class="count-brand">(13)</span></label>
                                                </fieldset>
                                                <fieldset class="fieldset-item">
                                                    <input type="checkbox" name="brand" class="tf-check" id="zalando">
                                                    <label for="zalando">Zalando <span class="count-brand">(54)</span></label>
                                                </fieldset>
                                                <fieldset class="fieldset-item">
                                                    <input type="checkbox" name="brand" class="tf-check" id="adidas">
                                                    <label for="adidas">Adidas <span class="count-brand">(93)</span></label>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="canvas-bottom d-block d-xl-none">
                                        <button id="reset-filter" class="tf-btn btn-reset">Reset Filters</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            <div class="tf-list-layout wrapper-shop" id="listLayout" style="display: none;">
                                <!-- card product list 1 -->
                                <div class="card-product style-list" data-availability="Out of stock" data-brand="adidas">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-19.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-19.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-20.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-20.jpg')}}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Double-button trench coat</a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$219.99</span></div>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active line">
                                                    <span class="d-none text-capitalize color-filter">Green</span>
                                                    <span class="swatch-value bg-light-green"></span>
                                                    <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-19.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-19.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Grey</span>
                                                    <span class="swatch-value bg-grey-2"></span>
                                                    <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-1.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-1.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-8.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-8.jpg')}}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon active">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 2 -->
                                <div class="card-product style-list" data-availability="Out of stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-31.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-31.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                        <span class="price current-price">$59.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Orange</span>
                                                    <span class="swatch-value bg-light-orange"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Orange</span>
                                                    <span class="swatch-value bg-orange"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-43.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-43.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Pink</span>
                                                    <span class="swatch-value bg-dark-pink"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-47.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-47.jpg')}}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 3 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="nike">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-63.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-63.jpg')}}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-64.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-64.jpg')}}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <div class="price"><span class="old-price">$98.00</span><span class="current-price">$219.95</span></div>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-63.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-63.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Grey</span>
                                                    <span class="swatch-value bg-grey-2"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-69.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-69.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Black</span>
                                                    <span class="swatch-value bg-main"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-70.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-70.jpg')}}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 4 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="gucci">   
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-38.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-38.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price current-price">$59.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-41.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-41.jpg')}}" alt="image-product">
                                                </li>
                                                
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                
                                        
                                    </div>
                                </div>
                                <!-- card product list 5 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="hermes">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-133.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-133.jpg')}}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-131.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-131.jpg')}}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price current-price">$59.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Green</span>
                                                    <span class="swatch-value bg-light-green"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-133.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-133.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Black</span>
                                                    <span class="swatch-value bg-main"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-124.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-124.jpg')}}" alt="image-product">
                                                </li>
                                                
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">XXL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card product list 6 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="nike">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-168.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-168.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Cotton shopper bag</a>
                                        <span class="price current-price">$199.25</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Beige</span>
                                                    <span class="swatch-value bg-beige"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-162.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-162.jpg')}}" alt="image-product">
                                                </li>
                                                
                                            </ul>
                                    
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card product list 7 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-84.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-84.jpg')}}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Belt wrap dress</a>
                                        <span class="price current-price">$129.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Green</span>
                                                    <span class="swatch-value bg-light-green"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Grey</span>
                                                    <span class="swatch-value bg-grey"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-94.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-94.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch line">
                                                    <span class="d-none text-capitalize color-filter">White</span>
                                                    <span class="swatch-value bg-white"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-87.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-87.jpg')}}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">2XL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- card product list 8 -->
                                <div class="card-product style-list" data-availability="In stock" data-brand="adidas">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product" data-src="{{ asset('front_assets/images/products/womens/women-12.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-12.jpg')}}" alt="image-product">
                                            <img class="lazyload img-hover" data-src="{{ asset('front_assets/images/products/womens/women-13.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-13.jpg')}}" alt="image-product">
                                        </a>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price current-price">$69.99</span>
                                        <p class="description text-secondary text-line-clamp-2">The garments labelled as Committed are products that have been produced using sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="variant-wrap-list">
                                            <ul class="list-color-product">
                                                <li class="list-color-item color-swatch active">
                                                    <span class="d-none text-capitalize color-filter">Red</span>
                                                    <span class="swatch-value bg-red"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-12.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-12.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Black</span>
                                                    <span class="swatch-value bg-main"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-13.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-13.jpg')}}" alt="image-product">
                                                </li>
                                                <li class="list-color-item color-swatch">
                                                    <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                    <span class="swatch-value bg-light-blue"></span>
                                                    <img class="lazyload" data-src="{{ asset('front_assets/images/products/womens/women-14.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-14.jpg')}}" alt="image-product">
                                                </li>
                                            </ul>
                                            <div class="size-box list-product-btn">
                                                <span class="size-item box-icon">S</span>
                                                <span class="size-item box-icon">M</span>
                                                <span class="size-item box-icon">L</span>
                                                <span class="size-item box-icon">XL</span>
                                                <span class="size-item box-icon disable">2XL</span>
                                            </div>
                                            <div class="list-product-btn">
                                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                    <span class="icon icon-heart"></span>
                                                    <span class="tooltip">Wishlist</span>
                                                </a>
                                                <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                    <span class="icon icon-gitDiff"></span>
                                                    <span class="tooltip">Compare</span>
                                                </a>
                                                <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                    <span class="icon icon-eye"></span>
                                                    <span class="tooltip">Quick View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- pagination -->
                                <ul class="wg-pagination">
                                    <li><a href="#" class="pagination-item text-button">1</a></li>
                                    <li class="active"><div class="pagination-item text-button">2</div></li>
                                    <li><a href="#" class="pagination-item text-button">3</a></li>
                                    <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                                </ul>
                            </div>
                            <div class="tf-grid-layout wrapper-shop tf-col-3" id="gridLayout">
                                <!-- card product 1 -->
                                <div class="card-product grid" data-availability="Out of stock" data-brand="adidas">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-19.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-19.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-20.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-20.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price current-price">$59.99</span>
                                    </div>
                                </div>
                                <!-- card product 2 -->
                                <div class="card-product grid" data-availability="In stock" data-brand="nike">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-176.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-176.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-179.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-179.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="marquee-product bg-main">
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$79.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-176.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-176.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-177.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-177.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 3 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-30.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-30.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="variant-wrap countdown-wrap">
                                            <div class="variant-box">
                                                <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item"><span class="countdown__value countdown__value--0 js-countdown__value--0">11</span><span class="countdown__label">D :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">15</span><span class="countdown__label">H :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">44</span><span class="countdown__label">M :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">21</span><span class="countdown__label">S</span></span></div></div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ramie shirt with pockets </a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$89.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-29.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-light-grey"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-33.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-33.jpg')}}" alt="image-product">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 4 -->
                                <div class="card-product grid" data-availability="Out of stock" data-brand="gucci">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-1.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-1.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-2.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-2.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price current-price">$69.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-dark-grey"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-1.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-1.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-2.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-2.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-dark-grey-2"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-3.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-3.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 5 -->
                                <div class="card-product grid card-product-size" data-availability="Out of stock" data-brand="hermes">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-8.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-8.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-9.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-9.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price current-price">$39.99</span>
                                    </div>
                                </div>
                                <!-- card product 6 -->
                                <div class="card-product grid" data-availability="In stock" data-brand="zalando">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-171.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-171.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-172.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-172.jpg')}}" alt="image-product">
                                        </a>
                                        
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Faux-leather trousers</a>
                                        <span class="price current-price">$79.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-orange"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-171.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-171.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Pink</span>
                                                <span class="swatch-value bg-dark-pink"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-172.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-172.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 7 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="nike">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-84.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-84.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Belt wrap dress</a>
                                        <div class="price"><span class="old-price">$98.00</span><span class="current-price">$129.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Green</span>
                                                <span class="swatch-value bg-light-green"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-83.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-grey"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-94.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-94.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-87.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-87.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 8 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-102.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-102.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-103.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-103.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Double-button trench coat</a>
                                        <div class="price"><span class="old-price">$98.00</span><span class="current-price">$219.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-grey-2"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-102.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-102.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Orange</span>
                                                <span class="swatch-value bg-light-orange"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-111.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-111.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-104.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-104.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 9 -->
                                <div class="card-product grid" data-availability="In stock" data-brand="hermes">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-11.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-11.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-12.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-12.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price current-price">$59.99</span>
                                    </div>
                                </div>
                                <!-- card product 10 -->
                                <div class="card-product grid" data-availability="In stock" data-brand="gucci">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-13.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-13.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-14.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-14.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="marquee-product bg-main">
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25% OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$79.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-13.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-13.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-12.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-12.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 11 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="zalando">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-7.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-7.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-8.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-8.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                            </ul>
                                        </div>
                                        <div class="variant-wrap countdown-wrap">
                                            <div class="variant-box">
                                                <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"><div aria-hidden="true" class="countdown__timer"><span class="countdown__item"><span class="countdown__value countdown__value--0 js-countdown__value--0">11</span><span class="countdown__label">D :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--1 js-countdown__value--1">15</span><span class="countdown__label">H :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--2 js-countdown__value--2">44</span><span class="countdown__label">M :</span></span><span class="countdown__item"><span class="countdown__value countdown__value--3 js-countdown__value--3">21</span><span class="countdown__label">S</span></span></div></div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ramie shirt with pockets </a>
                                        <div class="price"><span class="old-price">$98.00</span> <span class="current-price">$89.99</span></div>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Green</span>
                                                <span class="swatch-value bg-light-green"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-7.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-7.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-light-grey"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-11.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-11.jpg')}}" alt="image-product">
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 12 -->
                                <div class="card-product grid" data-availability="In stock" data-brand="adidas">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-1.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-1.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-3.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-3.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price current-price">$69.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-1.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-1.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Pink</span>
                                                <span class="swatch-value bg-light-pink"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-13.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-13.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-dark-grey-2"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-9.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-9.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 13 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="nike">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-38.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-38.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">XS</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                                <li class="size-item">3XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Buttoned cotton shirt</a>
                                        <span class="price current-price">$89.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Light Blue</span>
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-37.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-41.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-41.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 14 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="LV">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-15.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-15.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-16.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-16.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">XS</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                                <li class="size-item">3XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Chest pocket cotton over shirt</a>
                                        <span class="price current-price">$99.25</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-15.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-15.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Black</span>
                                                <span class="swatch-value bg-main"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-18.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-18.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Dark Blue</span>
                                                <span class="swatch-value bg-dark-blue"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-17.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-17.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 15 -->
                                <div class="card-product grid" data-availability="In stock" data-brand="gucci">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-168.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-168.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Cotton shopper bag</a>
                                        <span class="price current-price">$199.25</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="d-none text-capitalize color-filter">White</span>
                                                <span class="swatch-value bg-white"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-167.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-162.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-162.jpg')}}" alt="image-product">
                                            </li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 16 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="adidas">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-19.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-19.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/mens/men-20.jpg')}}" src="{{ asset('front_assets/images/products/mens/men-20.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">XS</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                                <li class="size-item">3XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Chest pocket cotton over shirt</a>
                                        <span class="price current-price">$250.00</span>
                                        
                                    </div>
                                </div>
                                <!-- card product 17 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="hermes">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-73.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-73.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-74.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-74.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Belt long jumpsuit</a>
                                        <span class="price current-price">$260.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Beige</span>
                                                <span class="swatch-value bg-beige"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-73.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-73.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Black</span>
                                                <span class="swatch-value bg-black"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-70.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-70.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Red</span>
                                                <span class="swatch-value bg-red"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-78.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-78.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- card product 18 -->
                                <div class="card-product grid card-product-size" data-availability="In stock" data-brand="zalando">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="img-product ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-132.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-132.jpg')}}" alt="image-product">
                                            <img class="img-hover ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-131.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-131.jpg')}}" alt="image-product">
                                        </a>
                                        <div class="variant-wrap size-list">
                                            <ul class="variant-box">
                                                <li class="size-item">S</li>
                                                <li class="size-item">M</li>
                                                <li class="size-item">L</li>
                                                <li class="size-item">XL</li>
                                                <li class="size-item">2XL</li>
                                            </ul>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                        </div> 
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Oversized knitted coat with pockets</a>
                                        <span class="price current-price">$270.00</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active">
                                                <span class="d-none text-capitalize color-filter">Green</span>
                                                <span class="swatch-value bg-light-green"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-132.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-132.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Black</span>
                                                <span class="swatch-value bg-black"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-123.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-123.jpg')}}" alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="d-none text-capitalize color-filter">Grey</span>
                                                <span class="swatch-value bg-grey"></span>
                                                <img class=" ls-is-cached lazyloaded" data-src="{{ asset('front_assets/images/products/womens/women-112.jpg')}}" src="{{ asset('front_assets/images/products/womens/women-112.jpg')}}" alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- pagination -->
                                <ul class="wg-pagination justify-content-center">
                                    <li><a href="#" class="pagination-item text-button">1</a></li>
                                    <li class="active"><div class="pagination-item text-button">2</div></li>
                                    <li><a href="#" class="pagination-item text-button">3</a></li>
                                    <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- /Section product -->

@endsection
