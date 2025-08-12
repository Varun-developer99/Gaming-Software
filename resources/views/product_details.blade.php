@extends('layouts.front.app')

@section('title', 'Product Details')

@section('css')
    <style>
        .wrap-slider img {
            border-radius: 21px;
        }

        .movalble_buttons {
            background: #0a3030;
            backdrop-filter: blur(7.5px);
            display: flex;
            align-items: center;
            padding: 7px 0;
            justify-content: center;
            width: 100%;
            border-top: 1px solid rgb(203 203 203/50%);
            border-bottom: 1px solid rgb(203 203 203/50%);
            height: fit-content;
        }

        .movalble_buttons {
            order: 1;
            margin-bottom: 50px;
        }

        .movalble_buttons {
            position: sticky;
            top: 0;
            z-index: 9;
        }

        .movalble_buttons [class^=btn] {
            border-radius: 0;
            border: 0;
            padding: 8px 0;
            color: #fff;
            text-align: center;
            font-size: 14px;
            font-style: normal;
            font-weight: 500;
            line-height: 24px;
            margin-right: 32px;
        }
    </style>
@endsection

@section('content')
    <!-- breadcrumb -->
    <div class="tf-breadcrumb">
        <div class="container">
            <div class="tf-breadcrumb-wrap">
                <div class="tf-breadcrumb-list">
                    <a href="#" class="text text-caption-1">Homepage</a>
                    <i class="icon icon-arrRight"></i>
                    <a href="#" class="text text-caption-1">Women</a>
                    <i class="icon icon-arrRight"></i>
                    <span class="text text-caption-1">Leather boots with tall leg</span>
                </div>
                <div class="tf-breadcrumb-prev-next">
                    <a href="#" class="tf-breadcrumb-prev">
                        <i class="icon icon-arrLeft"></i>
                    </a>
                    <a href="#" class="tf-breadcrumb-back">
                        <i class="icon icon-squares-four"></i>
                    </a>
                    <a href="#" class="tf-breadcrumb-next">
                        <i class="icon icon-arrRight"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->

    <!-- tf-add-cart-success -->
    <div class="tf-add-cart-success">
        <div class="tf-add-cart-heading">
            <h5>Shopping Cart</h5>
            <i class="icon icon-close tf-add-cart-close"></i>
        </div>
        <div class="tf-add-cart-product">
            <div class="image">
                <img class=" ls-is-cached lazyloaded"
                    data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}" alt=""
                    src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}">
            </div>
            <div class="content">
                <div class="text-title">
                    <a class="link" href="product-detail.html">Biker-style leggings</a>
                </div>
                <div class="text-caption-1 text-secondary-2">Green, XS, Cotton</div>
                <div class="text-title">$68.00</div>
            </div>
        </div>
        <a href="shopping-cart.html" class="tf-btn w-100 btn-fill radius-4"><span class="text text-btn-uppercase">View
                cart</span></a>
    </div>
    <!-- /tf-add-cart-success -->

    <!-- Product_Main -->
    <section class="flat-spacing">
        <div class="tf-main-product section-image-zoom">
            <div class="container">
                <div class="row">
                    <!-- Product default -->
                    <div class="col-md-6">
                        <div class="tf-product-media-wrap sticky-top">
                            <div class="thumbs-slider">
                                <div dir="ltr" class="swiper tf-product-media-thumbs other-image-zoom"
                                    data-direction="vertical">
                                    <div class="swiper-wrapper stagger-wrap">
                                        <div class="swiper-slide stagger-item" data-color="gray">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="gray">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="gray">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="gray">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-5.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-5.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="beige">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-6.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-6.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="beige">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="beige">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="grey">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-23.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-23.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="swiper-slide stagger-item" data-color="grey">
                                            <div class="item">
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-24.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-24.jpg') }}"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide" data-color="gray">
                                            <a href="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="gray">
                                            <a href="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="gray">
                                            <a href="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="gray">
                                            <a href="{{ asset('front_assets/images/products/womens/women-5.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-5.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-5.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-5.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="beige">
                                            <a href="{{ asset('front_assets/images/products/womens/women-6.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-6.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-6.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-6.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="beige">
                                            <a href="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="beige">
                                            <a href="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-7.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="grey">
                                            <a href="{{ asset('front_assets/images/products/womens/women-23.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-23.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-23.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-23.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="swiper-slide" data-color="grey">
                                            <a href="{{ asset('front_assets/images/products/womens/women-24.jpg') }}"
                                                target="_blank" class="item" data-pswp-width="600px"
                                                data-pswp-height="800px">
                                                <img class="tf-image-zoom lazyload"
                                                    data-zoom="{{ asset('front_assets/images/products/womens/women-24.jpg') }}"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-24.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-24.jpg') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /Product default -->
                    <!-- tf-product-info-list -->
                    <div class="col-md-6">
                        <div class="tf-product-info-wrap position-relative">
                            <div class="tf-zoom-main"></div>
                            <div class="tf-product-info-list other-image-zoom">
                                <div class="tf-product-info-heading">
                                    <div class="tf-product-info-name">
                                        <div class="text text-btn-uppercase">Clothing</div>
                                        <h3 class="name">Stretch Strap Top</h3>
                                        <div class="sub">
                                            <div class="tf-product-info-rate">
                                                <div class="list-star">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <div class="text text-caption-1">(134 reviews)</div>
                                            </div>
                                            <div class="tf-product-info-sold">
                                                <i class="icon icon-lightning"></i>
                                                <div class="text text-caption-1">18 sold in last 32 hours</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tf-product-info-desc">
                                        <div class="tf-product-info-price">
                                            <h5 class="price-on-sale font-2">$79.99</h5>
                                            <div class="compare-at-price font-2">$98.99</div>
                                            <div class="badges-on-sale text-btn-uppercase">
                                                -25%
                                            </div>
                                        </div>
                                        <p>The garments labelled as Committed are products that have been produced using
                                            sustainable fibres or processes, reducing their environmental impact.</p>
                                        <div class="tf-product-info-liveview">
                                            <i class="icon icon-eye"></i>
                                            <p class="text-caption-1"><span class="liveview-count">28</span> people are
                                                viewing this right now</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-product-info-choose-option">
                                    <div class="variant-picker-item">
                                        <div class="variant-picker-label mb_12">
                                            Colors:<span
                                                class="text-title variant-picker-label-value value-currentColor">Gray</span>
                                        </div>
                                        <div class="variant-picker-values">
                                            <input id="values-beige" type="radio" name="color1">
                                            <label class="hover-tooltip tooltip-bot radius-60 color-btn"
                                                for="values-beige" data-value="Beige" data-color="beige">
                                                <span class="btn-checkbox bg-color-beige1"></span>
                                                <span class="tooltip">Beige</span>
                                            </label>
                                            <input id="values-gray" type="radio" name="color1" checked="">
                                            <label class="hover-tooltip tooltip-bot radius-60 color-btn"
                                                data-price="79.99" for="values-gray" data-value="Gray"
                                                data-color="gray">
                                                <span class="btn-checkbox bg-color-gray"></span>
                                                <span class="tooltip">Gray</span>
                                            </label>
                                            <input id="values-grey" type="radio" name="color1">
                                            <label class="hover-tooltip tooltip-bot radius-60 color-btn"
                                                data-price="89.99" for="values-grey" data-value="Grey"
                                                data-color="grey">
                                                <span class="btn-checkbox bg-color-grey"></span>
                                                <span class="tooltip">Grey</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="variant-picker-item">
                                        <div class="d-flex justify-content-between mb_12">
                                            <div class="variant-picker-label">
                                                Size:<span class="text-title variant-picker-label-value">L</span>
                                            </div>
                                            <a href="#size-guide" data-bs-toggle="modal"
                                                class="size-guide text-title link">Size Guide</a>
                                        </div>
                                        <div class="variant-picker-values gap12">
                                            <input type="radio" name="size1" id="values-s">
                                            <label class="style-text size-btn" for="values-s" data-value="S"
                                                data-price="79.99">
                                                <span class="text-title">S</span>
                                            </label>
                                            <input type="radio" name="size1" id="values-m">
                                            <label class="style-text size-btn" for="values-m" data-value="M"
                                                data-price="79.99">
                                                <span class="text-title">M</span>
                                            </label>
                                            <input type="radio" name="size1" id="values-l" checked="">
                                            <label class="style-text size-btn" for="values-l" data-value="L"
                                                data-price="89.99">
                                                <span class="text-title">L</span>
                                            </label>
                                            <input type="radio" name="size1" id="values-xl">
                                            <label class="style-text size-btn" for="values-xl" data-value="XL"
                                                data-price="89.99">
                                                <span class="text-title">XL</span>
                                            </label>
                                            <input type="radio" name="size1" id="values-xxl">
                                            <label class="style-text size-btn type-disable" for="values-xxl"
                                                data-value="XXL" data-price="89.99">
                                                <span class="text-title">XXL</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="tf-product-info-quantity">
                                        <div class="title mb_12">Quantity:</div>
                                        <div class="wg-quantity">
                                            <span class="btn-quantity btn-decrease">-</span>
                                            <input class="quantity-product" type="text" name="number"
                                                value="1">
                                            <span class="btn-quantity btn-increase">+</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="tf-product-info-by-btn mb_10">
                                            <a href="#shoppingCart" data-bs-toggle="modal"
                                                class="btn-style-2 flex-grow-1 text-btn-uppercase fw-6 btn-add-to-cart"><span>Add
                                                    to cart -&nbsp;</span><span
                                                    class="tf-qty-price total-price">$79.99</span></a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon hover-tooltip compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip text-caption-2">Compare</span>
                                            </a>
                                            <a href="javascript:void(0);"
                                                class="box-icon hover-tooltip text-caption-2 wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip text-caption-2">Wishlist</span>
                                            </a>
                                        </div>
                                        <a href="#" class="btn-style-3 text-btn-uppercase">Buy it now</a>
                                    </div>
                                    <div class="tf-product-info-help">
                                        <div class="tf-product-info-extra-link">
                                            <a href="#delivery_return" data-bs-toggle="modal"
                                                class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-shipping"></i>
                                                </div>
                                                <p class="text-caption-1">Delivery & Return</p>
                                            </a>
                                            <a href="#ask_question" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-question"></i>
                                                </div>
                                                <p class="text-caption-1">Ask A Question</p>
                                            </a>
                                            <a href="#share_social" data-bs-toggle="modal" class="tf-product-extra-icon">
                                                <div class="icon">
                                                    <i class="icon-share"></i>
                                                </div>
                                                <p class="text-caption-1">Share</p>
                                            </a>
                                        </div>
                                        <div class="tf-product-info-time">
                                            <div class="icon">
                                                <i class="icon-timer"></i>
                                            </div>
                                            <p class="text-caption-1">Estimated Delivery:&nbsp;&nbsp;<span>12-26
                                                    days</span> (International), <span>3-6 days</span> (United States)</p>
                                        </div>
                                        <div class="tf-product-info-return">
                                            <div class="icon">
                                                <i class="icon-arrowClockwise"></i>
                                            </div>
                                            <p class="text-caption-1">Return within <span>45 days</span> of purchase.
                                                Duties & taxes are non-refundable.</p>
                                        </div>
                                        <div class="dropdown dropdown-store-location">
                                            <div class="dropdown-title dropdown-backdrop" data-bs-toggle="dropdown"
                                                aria-haspopup="true">
                                                <div class="tf-product-info-view link">
                                                    <div class="icon">
                                                        <i class="icon-map-pin"></i>
                                                    </div>
                                                    <span>View Store Information</span>
                                                </div>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <div class="dropdown-content">
                                                    <div class="dropdown-content-heading">
                                                        <h5>Store Location</h5>
                                                        <i class="icon icon-close"></i>
                                                    </div>
                                                    <div class="line-bt"></div>
                                                    <div>
                                                        <h6>Fashion Modave</h6>
                                                        <p>Pickup available. Usually ready in 24 hours</p>
                                                    </div>
                                                    <div>
                                                        <p>766 Rosalinda Forges Suite 044,</p>
                                                        <p>Gracielahaven, Oregon</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="tf-product-info-sku">
                                        <li>
                                            <p class="text-caption-1">SKU:</p>
                                            <p class="text-caption-1 text-1">53453412</p>
                                        </li>
                                        <li>
                                            <p class="text-caption-1">Vendor:</p>
                                            <p class="text-caption-1 text-1">Modave</p>
                                        </li>
                                        <li>
                                            <p class="text-caption-1">Available:</p>
                                            <p class="text-caption-1 text-1">Instock</p>
                                        </li>
                                        <li>
                                            <p class="text-caption-1">Categories:</p>
                                            <p class="text-caption-1"><a href="#" class="text-1 link">Clothes</a>,
                                                <a href="#" class="text-1 link">women</a>, <a href="#"
                                                    class="text-1 link">T-shirt</a>
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="tf-product-info-guranteed">
                                        <div class="text-title">
                                            Guranteed safe checkout:
                                        </div>
                                        <div class="tf-payment">
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-1.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-2.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-3.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-4.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-5.png') }}"
                                                    alt="">
                                            </a>
                                            <a href="#">
                                                <img src="{{ asset('front_assets/images/payment/img-6.png') }}"
                                                    alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Product_Description_Accordion -->
                        <section class="">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <ul class="accordion-product-wrap" id="accordion-product">
                                            <li class="accordion-product-item">
                                                <a href="#accordion-1" class="accordion-title current" data-bs-toggle=""
                                                    aria-expanded="true" aria-controls="accordion-1">
                                                    <h6>Product Details</h6>
                                                    <span class="btn-open-sub"></span>
                                                </a>
                                                <div id="accordion-1" class="" data-bs-parent="#accordion-product">
                                                    <div class="accordion-content tab-description">
                                                        <div class="right">
                                                            <div class="letter-1 text-btn-uppercase mb_12">Stretch strap
                                                                top</div>
                                                            <p class="mb_12 text-secondary">Nodding to retro styles, this
                                                                Hyperbola T-shirt is defined by its off-the-shoulder design.
                                                                It's spun from a green stretch cotton jersey and adorned
                                                                with an embroidered AC logo on the front, a brand's
                                                                signature.</p>
                                                            <p class="text-secondary">Thick knitted fabric. Short design.
                                                                Straight design. Rounded neck. Sleeveless. Straps. Unclosed.
                                                                Cable knit finish. Co-ord.</p>
                                                        </div>
                                                        <div class="left">
                                                            <div class="letter-1 text-btn-uppercase mb_12">COMPOSITION,
                                                                ORIGIN AND CARE GUIDELINES</div>
                                                            <ul class="list-text type-disc mb_12 gap-6">
                                                                <li>Composition: 55% polyester, 30% acrylic, 13% polyamide,
                                                                    2% elastane</li>
                                                                <li>Designed in Barcelona</li>
                                                                <li>Origin</li>
                                                                <li>Manufacture: USA</li>
                                                            </ul>

                                                            <div class="text-caption-2">MACHINE WASHING MAX 30°C / 85ºF
                                                                SHORT SPIN DRY</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="accordion-product-item">
                                                <a href="#accordion-3" class="accordion-title  current" data-bs-toggle=""
                                                    aria-expanded="true" aria-controls="accordion-3">
                                                    <h6>Additional Info</h6>
                                                    <span class="btn-open-sub"></span>
                                                </a>
                                                <div id="accordion-3" class="" data-bs-parent="#accordion-product">
                                                    <div class="accordion-content tab-shipping">
                                                        <div class="w-100">
                                                            <div class="text-btn-uppercase mb_12">We've got your back</div>
                                                            <p class="mb_12">One delivery fee to most locations (check our
                                                                Orders & Delivery page)</p>
                                                            <p class="">Free returns within 14 days (excludes final
                                                                sale and made-to-order items, face masks and certain
                                                                products containing hazardous or flammable materials, such
                                                                as fragrances and aerosols)</p>
                                                        </div>
                                                        {{-- <div class="w-100">
                                            <div class="text-btn-uppercase mb_12">Import duties information</div>
                                            <p>Let us handle the legwork. Delivery duties are included in the item price when shipping to all EU countries (excluding the Canary Islands), plus The United Kingdom, USA, Canada, China Mainland, Australia, New Zealand, Puerto Rico, Switzerland, Singapore, Republic Of Korea, Kuwait, Mexico, Qatar, India, Norway, Saudi Arabia, Taiwan Region, Thailand, U.A.E., Japan, Brazil, Isle of Man, San Marino, Colombia, Chile, Argentina, Egypt, Lebanon, Hong Kong SAR, Bahrain and Turkey. All import duties are included in your order – the price you see is the price you pay.</p>
                                        </div> --}}
                                                    </div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /Product_Description_Accordion -->
                    </div>
                    <!-- /tf-product-info-list -->

                </div>
            </div>
        </div>
        <div class="tf-sticky-btn-atc">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form class="form-sticky-atc">
                            <div class="tf-sticky-atc-product">
                                <div class="image">
                                    <img class="lazyload"
                                        data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                        alt=""
                                        src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}">
                                </div>
                                <div class="content">
                                    <div class="text-title">
                                        Biker-style leggings
                                    </div>
                                    <div class="text-caption-1 text-secondary-2">Green, XS, Cotton</div>
                                    <div class="text-title">$68.00</div>
                                </div>
                            </div>
                            <div class="tf-sticky-atc-infos">
                                <div class="tf-sticky-atc-size d-flex gap-12 align-items-center">
                                    <div class="tf-sticky-atc-infos-title text-title">Size:</div>
                                    <div class="tf-dropdown-sort style-2" data-bs-toggle="dropdown">
                                        <div class="btn-select">
                                            <span class="text-sort-value font-2">M</span>
                                            <span class="icon icon-arrow-down"></span>
                                        </div>
                                        <div class="dropdown-menu">
                                            <div class="select-item">
                                                <span class="text-value-item">S</span>
                                            </div>
                                            <div class="select-item active">
                                                <span class="text-value-item">M</span>
                                            </div>
                                            <div class="select-item">
                                                <span class="text-value-item">L</span>
                                            </div>
                                            <div class="select-item">
                                                <span class="text-value-item">XL</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tf-sticky-atc-quantity d-flex gap-12 align-items-center">
                                    <div class="tf-sticky-atc-infos-title text-title">Quantity:</div>
                                    <div class="wg-quantity style-1">
                                        <span class="btn-quantity minus-btn">-</span>
                                        <input type="text" name="number" value="1">
                                        <span class="btn-quantity plus-btn">+</span>
                                    </div>
                                </div>
                                <div class="tf-sticky-atc-btns">
                                    <a href="#shoppingCart" data-bs-toggle="modal"
                                        class="tf-btn w-100 btn-reset radius-4 btn-add-to-cart"><span
                                            class="text text-btn-uppercase">Add To Cart</span></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Product_Main -->
    <div class="movalble_buttons">
        <!-- <a href="#overview" class="btn1">Overview</a> -->
        <a href="#product_benefits" class="btn2">Product Benefits</a> <a href="#product_features"
            class="btn3">Product Features</a> <a href="#howtowear" class="btn4">How to Wear</a>
        <a href="#faqs" class="btn6">FAQs</a>
        <a href="#reviews" class="btn7">Reviews</a>
    </div>
    <section class="pb-4">
        <div class="container">
            <div class="frequently-bought-together-2">
                <form class="form-bundle-product type-cols">
                    <h5 class="mb_16">Frequently Bought Together</h5>
                    <div class="tf-bundle-products-wrap">
                        <div class="tf-bundle-product-item">
                            <div class="tf-product-bundle-image">
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="tf-product-bundle-infos">
                                <div class="text-title">V-neck cotton T-shirt</div>
                                <div class="tf-product-bundle-variant tf-select">
                                    <select class="">
                                        <option selected="selected">Green, XS</option>
                                        <option>Green, L</option>
                                    </select>
                                </div>
                                <div class="tf-product-info-price type-small">
                                    <h5 class="price-on-sale">$59.99</h5>
                                    <div class="compare-at-price">$79.99</div>
                                    <div class="badges-on-sale">-25%</div>
                                </div>
                            </div>
                        </div>
                        <div class="tf-bundle-product-item">
                            <div class="tf-product-bundle-image">
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/products/womens/women-37.jpg') }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="tf-product-bundle-infos">
                                <div class="text-title">Buttoned cotton shirt</div>
                                <div class="tf-product-bundle-variant tf-select">
                                    <select class="">
                                        <option selected="selected">Green, XS</option>
                                        <option>Green, L</option>
                                    </select>
                                </div>
                                <div class="tf-product-info-price type-small">
                                    <h5 class="price-on-sale">$59.99</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tf-bundle-product-item">
                            <div class="tf-product-bundle-image">
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="tf-product-bundle-infos">
                                <div class="text-title">Ramie shirt with pockets </div>
                                <div class="tf-product-bundle-variant tf-select">
                                    <select class="">
                                        <option selected="selected">Green, XS</option>
                                        <option>Green, L</option>
                                    </select>
                                </div>
                                <div class="tf-product-info-price type-small">
                                    <h5 class="price-on-sale">$59.99</h5>
                                    <div class="compare-at-price">$79.99</div>
                                    <div class="badges-on-sale">-25%</div>
                                </div>
                            </div>
                        </div>
                        <div class="tf-bundle-product-item">
                            <div class="tf-product-bundle-image">
                                <a href="#">
                                    <img src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                        alt="">
                                </a>
                            </div>
                            <div class="tf-product-bundle-infos">
                                <div class="text-title">Ramie shirt with pockets </div>
                                <div class="tf-product-bundle-variant tf-select">
                                    <select class="">
                                        <option selected="selected">Green, XS</option>
                                        <option>Green, L</option>
                                    </select>
                                </div>
                                <div class="tf-product-info-price type-small">
                                    <h5 class="price-on-sale">$59.99</h5>
                                    <div class="compare-at-price">$79.99</div>
                                    <div class="badges-on-sale">-25%</div>
                                </div>
                            </div>
                        </div>
                        <div class="tf-bundle-product-total-submit">
                            <h6>Total price:</h6>
                            <div class="tf-product-info-price type-1">
                                <h4 class="price-on-sale">$68.00</h4>
                                <div class="compare-at-price">$98.00</div>
                                <div class="badges-on-sale">-25%</div>
                            </div>
                            <a href="#shoppingCart" data-bs-toggle="modal"
                                class="tf-bundle-product-btn btn-style-2 text-btn-uppercase">Add to
                                cart</a>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </section>
    <!-- Slider -->
    <section class="flat-spacing pb-4">
        <div class="container">
            <div class="tf-slideshow slider-default slider-effect-fade">
                <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1"
                    data-centered="false" data-space="0" data-space-mb="0" data-loop="true" data-auto-play="true">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('front_assets/images/slider/slider-fashion-trendset1.jpg') }}"
                                    alt="fashion-slideshow">
                                <div class="box-content">
                                    <div class="content-slider">
                                        <div class="box-title-slider">
                                            <p class="fade-item fade-item-1 subheading text-btn-uppercase text-white">
                                                collection Summer 2024</p>
                                            <div class="fade-item fade-item-2 heading text-white title-display">Be The
                                                First <br> To Wear</div>
                                        </div>
                                        <div class="fade-item fade-item-3 box-btn-slider">
                                            <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span
                                                    class="text">Explore Collection</span><i
                                                    class="icon icon-arrowUpRight"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="wrap-slider">
                                <img src="{{ asset('front_assets/images/slider/slider-fashion-trendset2.jpg') }}"
                                    alt="fashion-slideshow">
                                <div class="box-content">
                                    <div class="content-slider">
                                        <div class="box-title-slider">
                                            <p class="fade-item fade-item-1 subheading text-btn-uppercase text-white">
                                                collection Summer 2024</p>
                                            <div class="fade-item fade-item-2 heading text-white title-display">Add the
                                                Finishing <br> Touches</div>
                                        </div>
                                        <div class="fade-item fade-item-3 box-btn-slider">
                                            <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span
                                                    class="text">Explore Collection</span><i
                                                    class="icon icon-arrowUpRight"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-pagination">
                    <div class="container">
                        <div class="sw-dots sw-pagination-slider type-circle white-circle justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Slider -->
    <!-- Slider -->
    <div class="slider-padding">
        <div class="container">
            <div class="tf-slideshow slider-style2 slider-radius-3 slider-video">
                <div class="wrap-slider">
                    <video src="{{ asset('front_assets/images/video/bg-video1.mp4') }}" autoplay="" muted=""
                        playsinline="" loop=""></video>
                    {{-- <div class="box-content">
                            <div class="container">
                                <div class="content-slider">
                                    <div class="box-title-slider">
                                        <div class="heading text-white title-display wow fadeInUp" data-wow-delay="0s">Winter Warmth</div>
                                        <p class="body-text-1 subheading text-white wow fadeInUp" data-wow-delay=".1s">Stay cozy and fashionable with our winter collection.</p>
                                    </div>
                                    <div class="box-btn-slider wow fadeInUp" data-wow-delay=".2s">
                                        <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span class="text">Explore Collection</span><i class="icon icon-arrowUpRight"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- /Slider -->
    <!-- FAQs -->
    <section class="flat-spacing">
        <div class="container">
            <div class="page-faqs-wrap">
                <div class="list-faqs">
                    <div>
                        <h5 class="faqs-title">FAQs</h5>
                        <ul class="accordion-product-wrap style-faqs" id="accordion-faq-1">
                            <li class="accordion-product-item">
                                <a href="#accordion-1" class="accordion-title collapsed current"
                                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="accordion-1">
                                    <h6>How does COVID-19 affect my online orders and store purchases?</h6>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="accordion-1" class="collapse" data-bs-parent="#accordion-faq-1">
                                    <div class="accordion-faqs-content">
                                        <p class="text-secondary">The courier companies have adapted their procedures to
                                            guarantee the safety of our employees and our community. We thank you for your
                                            patience, as there may be some delays to deliveries. We remind you that you can
                                            still find us at Mango.com and on all our online channels. Our customer services
                                            are still there for you, to answer any questions you may have, although due to
                                            the current situation, we are operating with longer waiting times.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-product-item">
                                <a href="#accordion-2" class="accordion-title current" data-bs-toggle="collapse"
                                    aria-expanded="true" aria-controls="accordion-2">
                                    <h6>I have a promotional or discount code. How do I use it for an online purchase?</h6>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="accordion-2" class="collapse show" data-bs-parent="#accordion-faq-1">
                                    <div class="accordion-faqs-content">
                                        <p class="text-secondary">The courier companies have adapted their procedures to
                                            guarantee the safety of our employees and our community. We thank you for your
                                            patience, as there may be some delays to deliveries. We remind you that you can
                                            still find us at Mango.com and on all our online channels. Our customer services
                                            are still there for you, to answer any questions you may have, although due to
                                            the current situation, we are operating with longer waiting times.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-product-item">
                                <a href="#accordion-3" class="accordion-title collapsed current"
                                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="accordion-3">
                                    <h6>NEW! Plus sizes for Woman</h6>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="accordion-3" class="collapse" data-bs-parent="#accordion-faq-1">
                                    <div class="accordion-faqs-content">
                                        <p class="text-secondary">The courier companies have adapted their procedures to
                                            guarantee the safety of our employees and our community. We thank you for your
                                            patience, as there may be some delays to deliveries. We remind you that you can
                                            still find us at Mango.com and on all our online channels. Our customer services
                                            are still there for you, to answer any questions you may have, although due to
                                            the current situation, we are operating with longer waiting times.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-product-item">
                                <a href="#accordion-4" class="accordion-title collapsed current"
                                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="accordion-4">
                                    <h6>Where is my order?</h6>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="accordion-4" class="collapse" data-bs-parent="#accordion-faq-1">
                                    <div class="accordion-faqs-content">
                                        <p class="text-secondary">The courier companies have adapted their procedures to
                                            guarantee the safety of our employees and our community. We thank you for your
                                            patience, as there may be some delays to deliveries. We remind you that you can
                                            still find us at Mango.com and on all our online channels. Our customer services
                                            are still there for you, to answer any questions you may have, although due to
                                            the current situation, we are operating with longer waiting times.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion-product-item">
                                <a href="#accordion-5" class="accordion-title collapsed current"
                                    data-bs-toggle="collapse" aria-expanded="true" aria-controls="accordion-5">
                                    <h6>How can I exchange or return an item purchased online?</h6>
                                    <span class="btn-open-sub"></span>
                                </a>
                                <div id="accordion-5" class="collapse" data-bs-parent="#accordion-faq-1">
                                    <div class="accordion-faqs-content">
                                        <p class="text-secondary">The courier companies have adapted their procedures to
                                            guarantee the safety of our employees and our community. We thank you for your
                                            patience, as there may be some delays to deliveries. We remind you that you can
                                            still find us at Mango.com and on all our online channels. Our customer services
                                            are still there for you, to answer any questions you may have, although due to
                                            the current situation, we are operating with longer waiting times.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /FAQs -->
    <!-- Product_Description_Accordion -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="accordion-product-wrap">
                        <li class="accordion-product-item">
                            <h6>Customer Reviews</h6>
                            <div id="accordion-2" class=" show" data-bs-parent="#accordion-product">
                                <div class="accordion-content tab-reviews write-cancel-review-wrap ">
                                    <div class="tab-reviews-heading">
                                        <div class="top">
                                            <div class="text-center">
                                                <div class="number title-display">4.9</div>
                                                <div class="list-star">
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                    <i class="icon icon-star"></i>
                                                </div>
                                                <p>(168 Ratings)</p>
                                            </div>
                                            <div class="rating-score">
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">5</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 94.67%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">59</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">4</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">46</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">3</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 0%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">0</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">2</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 0%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">0</div>
                                                </div>
                                                <div class="item">
                                                    <div class="number-1 text-caption-1">1</div>
                                                    <i class="icon icon-star"></i>
                                                    <div class="line-bg">
                                                        <div style="width: 0%;"></div>
                                                    </div>
                                                    <div class="number-2 text-caption-1">0</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="btn-style-4 text-btn-uppercase letter-1 btn-comment-review btn-cancel-review">
                                                Cancel Review</div>
                                            <div
                                                class="btn-style-4 text-btn-uppercase letter-1 btn-comment-review btn-write-review">
                                                Write a review</div>
                                        </div>
                                    </div>
                                    <div class="reply-comment style-1 cancel-review-wrap">
                                        <div
                                            class="d-flex mb_24 gap-20 align-items-center justify-content-between flex-wrap">
                                            <h4 class="">03 Comments</h4>
                                            <div class="d-flex align-items-center gap-12">
                                                <div class="text-caption-1">Sort by:</div>
                                                <div class="tf-dropdown-sort" data-bs-toggle="dropdown">
                                                    <div class="btn-select">
                                                        <span class="text-sort-value">Most Recent</span>
                                                        <span class="icon icon-arrow-down"></span>
                                                    </div>
                                                    <div class="dropdown-menu">
                                                        <div class="select-item active">
                                                            <span class="text-value-item">Most Recent</span>
                                                        </div>
                                                        <div class="select-item">
                                                            <span class="text-value-item">Oldest</span>
                                                        </div>
                                                        <div class="select-item">
                                                            <span class="text-value-item">Most Popular</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reply-comment-wrap">
                                            <div class="reply-comment-item">
                                                <div class="user">
                                                    <div class="image">
                                                        <img src="{{ asset('front_assets/images/avatar/user-default.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <h6>
                                                            <a href="#" class="link">Superb quality apparel that
                                                                exceeds expectations</a>
                                                        </h6>
                                                        <div class="day text-secondary-2 text-caption-1">1 days ago
                                                            &nbsp;&nbsp;&nbsp;-</div>
                                                    </div>
                                                </div>
                                                <p class="text-secondary">Great theme - we were looking for a theme with
                                                    lots of built in features and flexibility and this was perfect. We
                                                    expected to need to employ a developer to add a few finishing touches.
                                                    But we actually managed to do everything ourselves. We did have one
                                                    small query and the support given was swift and helpful.</p>
                                            </div>
                                            <div class="reply-comment-item type-reply">
                                                <div class="user">
                                                    <div class="image">
                                                        <img src="{{ asset('front_assets/images/avatar/user-default.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <h6>
                                                            <a href="#" class="link">Reply from Modave</a>
                                                        </h6>
                                                        <div class="day text-secondary-2 text-caption-1">1 days ago
                                                            &nbsp;&nbsp;&nbsp;-</div>
                                                    </div>
                                                </div>
                                                <p class="text-secondary">We love to hear it! Part of what we love most
                                                    about Modave is how much it empowers store owners like yourself to build
                                                    a beautiful website without having to hire a developer :) Thank you for
                                                    this fantastic review!</p>
                                            </div>
                                            <div class="reply-comment-item">
                                                <div class="user">
                                                    <div class="image">
                                                        <img src="{{ asset('front_assets/images/avatar/user-default.jpg') }}"
                                                            alt="">
                                                    </div>
                                                    <div>
                                                        <h6>
                                                            <a href="#" class="link">Superb quality apparel that
                                                                exceeds expectations</a>
                                                        </h6>
                                                        <div class="day text-secondary-2 text-caption-1">1 days ago
                                                            &nbsp;&nbsp;&nbsp;-</div>
                                                    </div>
                                                </div>
                                                <p class="text-secondary">Great theme - we were looking for a theme with
                                                    lots of built in features and flexibility and this was perfect. We
                                                    expected to need to employ a developer to add a few finishing touches.
                                                    But we actually managed to do everything ourselves. We did have one
                                                    small query and the support given was swift and helpful.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="form-write-review write-review-wrap">
                                        <div class="heading">
                                            <h4>Write a review:</h4>
                                            <div class="list-rating-check">
                                                <input type="radio" id="star5" name="rate" value="5">
                                                <label for="star5" title="text"></label>
                                                <input type="radio" id="star4" name="rate" value="4">
                                                <label for="star4" title="text"></label>
                                                <input type="radio" id="star3" name="rate" value="3">
                                                <label for="star3" title="text"></label>
                                                <input type="radio" id="star2" name="rate" value="2">
                                                <label for="star2" title="text"></label>
                                                <input type="radio" id="star1" name="rate" value="1">
                                                <label for="star1" title="text"></label>
                                            </div>
                                        </div>
                                        <div class="mb_32">
                                            <div class="mb_8">Review Title</div>
                                            <fieldset class="mb_20">
                                                <input class="" type="text"
                                                    placeholder="Give your review a title" name="text" tabindex="2"
                                                    value="" aria-required="true" required="">
                                            </fieldset>
                                            <div class="mb_8">Review</div>
                                            <fieldset class="mb_20">
                                                <textarea class="" rows="4" placeholder="Write your comment here" tabindex="2" aria-required="true"
                                                    required=""></textarea>
                                            </fieldset>
                                            <div class="cols mb_20">
                                                <fieldset class="">
                                                    <input class="" type="text" placeholder="You Name (Public)"
                                                        name="text" tabindex="2" value=""
                                                        aria-required="true" required="">
                                                </fieldset>
                                                <fieldset class="">
                                                    <input class="" type="email"
                                                        placeholder="Your email (private)" name="email" tabindex="2"
                                                        value="" aria-required="true" required="">
                                                </fieldset>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <input type="radio" name="availability" class="tf-check"
                                                    id="check1">
                                                <label class="text-secondary" for="check1">Save my name, email, and
                                                    website in this browser for the next time I comment.</label>
                                            </div>
                                        </div>
                                        <div class="button-submit">
                                            <button class="text-btn-uppercase" type="submit">Submit Reviews</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /Product_Description_Accordion -->
    <!-- Ralated Products -->
    <section class="flat-spacing">
        <div class="container flat-animate-tab">
            <ul class="tab-product justify-content-sm-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                <li class="nav-tab-item" role="presentation">
                    <a href="#ralatedProducts" class="active" data-bs-toggle="tab">Ralated Products</a>
                </li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active show" id="ralatedProducts" role="tabpanel">
                    <div dir="ltr" class="swiper tf-sw-latest" data-preview="4" data-tablet="3" data-mobile="2"
                        data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                        data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                                alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add
                                                To cart</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price">$59.99</span>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                                alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="marquee-product bg-main">
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
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
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal"
                                                class="btn-main-product">Add
                                                To cart</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                        <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                                alt="image-product">
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
                                                <div class="js-countdown" data-timer="1007500"
                                                    data-labels="D :,H :,M :,S"></div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                                Add</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ramie shirt with pockets </a>
                                        <span class="price"><span class="old-price">$98.00</span> $89.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="swatch-value bg-light-orange"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-light-grey"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                    alt="image-product">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal"
                                                class="btn-main-product">Add
                                                To cart</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price">$69.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="swatch-value bg-dark-grey"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-light-pink"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-dark-grey-2"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-latest sw-dots type-circle justify-content-center"></div>
                    </div>
                </div>
                <div class="tab-pane" id="recentlyViewed" role="tabpanel">
                    <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3"
                        data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                        data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-19.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-20.jpg') }}"
                                                alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal"
                                                class="btn-main-product">Add
                                                To cart</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                        <span class="price">$59.99</span>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-179.jpg') }}"
                                                alt="image-product">
                                        </a>
                                        <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                                        <div class="marquee-product bg-main">
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="marquee-wrapper">
                                                <div class="initial-child-container">
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <span class="icon icon-lightning text-critical"></span>
                                                    </div>
                                                    <div class="marquee-child-item">
                                                        <p class="font-2 text-btn-uppercase fw-6 text-white">Hot Sale 25%
                                                            OFF</p>
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
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal"
                                                class="btn-main-product">Add
                                                To cart</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                        <span class="price"><span class="old-price">$98.00</span> $79.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="swatch-value bg-light-blue"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-176.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-light-blue-2"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-177.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product card-product-size">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-30.jpg') }}"
                                                alt="image-product">
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
                                                <div class="js-countdown" data-timer="1007500"
                                                    data-labels="D :,H :,M :,S"></div>
                                            </div>
                                        </div>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick
                                                Add</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ramie shirt with pockets </a>
                                        <span class="price"><span class="old-price">$98.00</span> $89.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="swatch-value bg-light-orange"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-29.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-light-grey"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-33.jpg') }}"
                                                    alt="image-product">
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-product">
                                    <div class="card-product-wrapper">
                                        <a href="product-detail.html" class="product-img">
                                            <img class="lazyload img-product"
                                                data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                alt="image-product">
                                            <img class="lazyload img-hover"
                                                data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                alt="image-product">
                                        </a>
                                        <div class="list-product-btn">
                                            <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                <span class="icon icon-heart"></span>
                                                <span class="tooltip">Wishlist</span>
                                            </a>
                                            <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare"
                                                class="box-icon compare btn-icon-action">
                                                <span class="icon icon-gitDiff"></span>
                                                <span class="tooltip">Compare</span>
                                            </a>
                                            <a href="#quickView" data-bs-toggle="modal"
                                                class="box-icon quickview tf-btn-loading">
                                                <span class="icon icon-eye"></span>
                                                <span class="tooltip">Quick View</span>
                                            </a>
                                        </div>
                                        <div class="list-btn-main">
                                            <a href="#shoppingCart" data-bs-toggle="modal"
                                                class="btn-main-product">Add To cart</a>
                                        </div>
                                    </div>
                                    <div class="card-product-info">
                                        <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                        <span class="price">$69.99</span>
                                        <ul class="list-color-product">
                                            <li class="list-color-item color-swatch active line">
                                                <span class="swatch-value bg-dark-grey"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-1.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-light-pink"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-2.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                            <li class="list-color-item color-swatch">
                                                <span class="swatch-value bg-dark-grey-2"></span>
                                                <img class="lazyload"
                                                    data-src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    src="{{ asset('front_assets/images/products/womens/women-3.jpg') }}"
                                                    alt="image-product">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /Ralated Products -->

@endsection
