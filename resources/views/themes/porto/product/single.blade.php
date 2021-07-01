@extends('themes.porto.layout.app')
@section('title')
    | Product Name
@endsection
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav mb-4">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="product-single-container product-single-default">
                <div class="row">
                    <div class="col-lg-7 col-md-6 product-single-gallery">
                        {{-- If product has set of images --}}
                        @if(count($product->images) > 0)
                        <div class="product-slider-container product-item">
                            <div class="product-single-carousel owl-carousel owl-theme">
                                @foreach ($product->images as $image)
                                    <div class="product-item">
                                        <img class="product-single-image" src="{{ asset($image->image) }}" data-zoom-image="{{ asset($image->image) }}"/>
                                    </div>
                                @endforeach
                                
                            </div>
                            <!-- End .product-single-carousel -->
                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>
                        <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                            @foreach ($product->images as $image)
                            <div class="col-3 owl-dot">
                                <img src="{{ asset(asset($image->image)) }}"/>
                            </div>
                            @endforeach
                        </div>
                        {{-- If product doesn't contain set of images except featured images --}}
                        @else
                        <div class="product-slider-container product-item">
                            <div class="">                                
                                <div class="product-item">
                                    <img class="product-single-image" src="{{ asset($product->thumbnail_image) }}" data-zoom-image="{{ asset($product->thumbnail_image) }}"/>
                                </div>                              
                            </div>
                            <!-- End .product-single-carousel -->
                            <span class="prod-full-screen">
                                <i class="icon-plus"></i>
                            </span>
                        </div>    
                        @endif
                        
                    </div><!-- End .col-lg-7 -->

                    <div class="col-lg-5 col-md-6">
                        <div class="product-single-details">
                            <h1 class="product-title">{{ $product->name }}</h1>

                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                </div><!-- End .product-ratings -->

                                <a href="#" class="rating-link">( 6 Reviews )</a>
                            </div><!-- End .product-container -->

                            <div class="price-box">
                                {{-- Please uncomment this to use old price feature into website --}}
                                {{-- <span class="old-price">$81.00</span> --}}
                                
                                <span class="product-price">{{ $product->price }} tk.</span>
                                
                                
                            </div><!-- End .price-box -->

                            <div class="product-desc">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                            </div><!-- End .product-desc -->

                            @if (count($product->colors) > 0)
                            <div class="product-filters-container">
                                <div class="product-single-filter">
                                    <label>Colors:</label>
                                    <ul class="config-swatch-list">
                                        @foreach ($$product->colors as $color)
                                            <li class="active">
                                                <a href="#" style="background-color: {{ $color->color }};"></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div><!-- End .product-single-filter -->
                            </div><!-- End .product-filters-container -->
                            @endif
                            

                            <div class="product-action product-all-icons">
                                <div class="product-single-qty">
                                    <input class="horizontal-quantity form-control" id="product-quantity" type="text" value="1">
                                </div><!-- End .product-single-qty -->

                                <button href="cart.html" class="paction add-cart" title="Add to Cart" onclick="handleAddToCart({{$product->id}})">
                                    <span>Add to Cart</span>
                                </button>
                                <button href="#" class="paction add-wishlist" title="Add to Wishlist">
                                    <span>Add to Wishlist</span>
                                </button>
                                <button href="#" class="paction add-compare" title="Add to Compare">
                                    <span>Add to Compare</span>
                                </button>
                            </div><!-- End .product-action -->

                            <div class="product-single-share">
                                <label>Share:</label>
                                <!-- www.addthis.com share plugin-->
                                <div class="addthis_inline_share_toolbox"></div>
                            </div><!-- End .product single-share -->
                        </div><!-- End .product-single-details -->
                    </div><!-- End .col-lg-5 -->
                </div><!-- End .row -->
            </div><!-- End .product-single-container -->

            <div class="product-single-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                        <div class="product-desc-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                            <ul>
                                <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                            </ul>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                        <div class="product-tags-content">
                            <form action="#">
                                <h4>Add Your Tags:</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-sm" required>
                                    <input type="submit" class="btn btn-primary" value="Add Tags">
                                </div><!-- End .form-group -->
                            </form>
                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                        </div><!-- End .product-tags-content -->
                    </div><!-- End .tab-pane -->

                    <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                        <div class="product-reviews-content">
                            <div class="collateral-box">
                                <ul>
                                    <li>Be the first to review this product</li>
                                </ul>
                            </div><!-- End .collateral-box -->

                            <div class="add-product-review">
                                <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                <p>How do you rate this product? *</p>

                                <form action="#">
                                    <table class="ratings-table">
                                        <thead>
                                            <tr>
                                                <th>&nbsp;</th>
                                                <th>1 star</th>
                                                <th>2 stars</th>
                                                <th>3 stars</th>
                                                <th>4 stars</th>
                                                <th>5 stars</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Quality</td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Value</td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Price</td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                </td>
                                                <td>
                                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="form-group">
                                        <label>Nickname <span class="required">*</span></label>
                                        <input type="text" class="form-control form-control-sm" required>
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label>Summary of Your Review <span class="required">*</span></label>
                                        <input type="text" class="form-control form-control-sm" required>
                                    </div><!-- End .form-group -->
                                    <div class="form-group mb-2">
                                        <label>Review <span class="required">*</span></label>
                                        <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                    </div><!-- End .form-group -->

                                    <input type="submit" class="btn btn-primary" value="Submit Review">
                                </form>
                            </div><!-- End .add-product-review -->
                        </div><!-- End .product-reviews-content -->
                    </div><!-- End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-single-tabs -->
        </div><!-- End .col-lg-9 -->

        <div class="sidebar-overlay"></div>
        <div class="sidebar-toggle"><i class="icon-right-open"></i></div>
        <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
            <div class="sidebar-wrapper">
                <div class="widget widget-brand">
                    <a href="#">
                        <img src="{{ asset('/assets/porto-theme/images/product-brand.png') }}" alt="brand name">
                    </a>
                </div><!-- End .widget -->

                <div class="widget widget-info">
                    <ul>
                        <li>
                            <i class="icon-shipping"></i>
                            <h4>FREE<br>SHIPPING</h4>
                        </li>
                        <li>
                            <i class="icon-us-dollar"></i>
                            <h4>100% MONEY<br>BACK GUARANTEE</h4>
                        </li>
                        <li>
                            <i class="icon-online-support"></i>
                            <h4>ONLINE<br>SUPPORT 24/7</h4>
                        </li>
                    </ul>
                </div><!-- End .widget -->

                <div class="widget widget-banner">
                    <div class="banner banner-image">
                        <a href="#">
                            <img src="{{ asset('/assets/porto-theme/images/banners/banner-sidebar.jpg') }}" alt="Banner Desc">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .widget -->

                <div class="widget widget-featured">
                    <h3 class="widget-title">Featured Products</h3>
                    
                    <div class="widget-body">
                        <div class="owl-carousel widget-featured-products" data-toggle="owl" data-owl-options="{
                            'lazyLoad': true,
                            'nav': true,
                            'dots': false,
                            'autoHeight': true
                        }">
                            <div class="featured-col">
                                <div class="product-default left-details product-widget">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{ asset('/assets/porto-theme/images/products/300x300/product1.jpg') }}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Woo Album #2</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$9.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{ asset('/assets/porto-theme/images/products/300x300/product2.jpg') }}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Luxury bag</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$350.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{ asset('/assets/porto-theme/images/products/300x300/product3.jpg') }}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Patient Ninja</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$35.00</span>
                                            <span class="product-price">$30.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .featured-col -->

                            <div class="featured-col">
                                <div class="product-default left-details product-widget">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{ asset('/assets/porto-theme/images/products/300x300/product4.jpg') }}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Woo Album #2</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$9.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{ asset('/assets/porto-theme/images/products/300x300/product5.jpg') }}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Luxury bag</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="product-price">$350.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                                <div class="product-default left-details product-widget">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{ asset('/assets/porto-theme/images/products/300x300/product6.jpg') }}">
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2 class="product-title">
                                            <a href="product.html">Patient Ninja</a>
                                        </h2>
                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div><!-- End .product-ratings -->
                                        </div><!-- End .product-container -->
                                        <div class="price-box">
                                            <span class="old-price">$35.00</span>
                                            <span class="product-price">$30.00</span>
                                        </div><!-- End .price-box -->
                                    </div><!-- End .product-details -->
                                </div>
                            </div><!-- End .featured-col -->
                        </div><!-- End .widget-featured-slider -->
                    </div><!-- End .widget-body -->
                </div><!-- End .widget -->
            </div>
        </aside><!-- End .col-md-3 -->
    </div><!-- End .row -->
</div><!-- End .container -->

<div class="featured-section">
    <div class="container">
        <h2 class="carousel-title">Featured Products</h2>

        <div class="featured-products owl-carousel owl-theme owl-dots-top" data-toggle="owl" data-owl-options="{
            'loop': false,
            'margin': 20,
            'autoplay': false,
            'responsive': {
              '0': {
                'items': 2
              },
              '700': {
                'items': 3,
                'margin': 15
              },
              '1200': {
                'items': 4
              }
            }
        }">
            <div class="product-default inner-icon inner-icon-inline center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/300x300/product1.jpg') }}">
                    </a>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        <a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                        <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                    </div>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">A White Chair</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
            <div class="product-default inner-icon inner-icon-inline center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/300x300/product2.jpg') }}">
                    </a>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        <a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                        <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                    </div>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">A White Chair</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
            <div class="product-default inner-icon inner-icon-inline center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/300x300/product3.jpg') }}">
                    </a>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        <a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                        <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                    </div>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">A White Chair</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
            <div class="product-default inner-icon inner-icon-inline center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/300x300/product4.jpg') }}">
                    </a>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        <a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                        <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                    </div>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">A White Chair</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
            <div class="product-default inner-icon inner-icon-inline center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/300x300/product5.jpg') }}">
                    </a>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal"><i class="icon-bag"></i></button>
                        <a href="#" class="btn-icon btn-icon-wish"><i class="icon-heart"></i></a>
                        <a href="ajax/product-quick-view.html" class="btn-icon btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a> 
                    </div>
                </figure>
                <div class="product-details">
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <h2 class="product-title">
                        <a href="product.html">A White Chair</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
        </div><!-- End .featured-products -->
    </div><!-- End .container -->
</div><!-- End .featured-section -->
@endsection

@section('page-script')
<script src="{{ asset('/assets/porto-theme/js/pages/single-products.js') }}"></script>
@endsection