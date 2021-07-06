@extends('themes.porto.layout.app')
<?php
    // Please Change the section name to choose section product for home 
    $section_name = 'Flash deals';
    $weekly_featured_section = -1;
        foreach ($homepage_sections as $key => $section) {
            if($section->section_name === $section_name) {
                $weekly_featured_section = $key;
            }
        } 
    ?>
@section('content') 
<div class="container">
    <section>
        <div class="row row-sm align-items-center">
            <div class="col-lg-8">
                <div class="home-slider owl-carousel owl-carousel-lazy owl-theme">
                    @foreach ($banners as $banner)
                        <div class="home-slide" class="owl-lazy">
                            <img class="owl-lazy" src="{{ asset($banner->image) }}" data-src="" alt="slider image">
                            <img src="{{ asset($banner->image) }}">
                            <div class="home-slide-content1">
                                {{-- <h2>chairs</h2>
                                <p>custom designs<br>you can afford</p> --}}
                                <button class="btn btn-dark">view the collection</button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-4">
                @if (session()->has('browse_error'))
                    <div class="alert alert-info" role="alert">
                        {{ session()->get('browse_error') }}
                    </div>
                @endif
                
                <form action="{{ route('proto-view-all-products-byBrandOrCategory') }}" method="GET" class="find-form">
                    <h3>find a product</h3>
                    <div class="select-custom">
                        <select class="form-control" id="byCategory" name="category">
                            <option disabled="" selected="" hidden="">BY CATEGORY</option>
                            @foreach ($categories as $category)
                                <option value={{ $category->id }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="select-custom">
                        <select class="form-control" id="byBrand" name="brand">
                            <option disabled="" selected="" hidden="">BY BRAND</option>
                            @foreach ($brands as $brand)
                                <option value={{ $brand->id }}>{{ $brand->brand_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit">Browse</button>
                </form>
                <div class="home-banner mb-2" style="background-image: url('{{ asset('/assets/porto-theme/images/banners/watch.png') }});">
                    <div class="row row-sm">
                        <div class="col-6" style="display : flex;justify-content: flex-end;">
                            <div class="banner-content">
                                <h3>save 10<sub>%</sub></h3>
                                <p>on all watches</p>
                                <button class="btn">porto10</button>
                                <span>Use Promo Code</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured-categories">
        <h2>featured categories</h2>

        <div class="row row-sm">
            <div class="col-6 col-md-4">
                <div class="product-category content-left-bottom hidden-count overlay-darker">
                    <a href="{{ route('proto-view-all-products', ['cat' => $categories[0]->id, 'sub_cat' => -1]) }}">
                        <figure>
                            <img src="{{ asset($categories[0]->image) }}">
                        </figure>
                        <div class="category-content">
                            <h3>{{ $categories[0]->name}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-5">
                <div class="product-category content-left-bottom hidden-count overlay-darker">
                    <a href="{{ route('proto-view-all-products', ['cat' => $categories[1]->id, 'sub_cat' => -1]) }}">
                        <figure>
                            <img src="{{ asset($categories[1]->image) }}">
                        </figure>
                        <div class="category-content">
                            <h3>{{ $categories[1]->name}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="product-category content-left-bottom hidden-count overlay-darker">
                    <a href="{{ route('proto-view-all-products', ['cat' => $categories[2]->id, 'sub_cat' => -1]) }}">
                        <figure>
                            <img src="{{ asset($categories[2]->image) }}">
                        </figure>
                        <div class="category-content">
                            <h3>{{ $categories[2]->name}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-4">
                <div class="product-category content-left-bottom hidden-count overlay-darker">
                    <a href="{{ route('proto-view-all-products', ['cat' => $categories[3]->id, 'sub_cat' => -1]) }}">
                        <figure>
                            <img src="{{ asset($categories[3]->image) }}">
                        </figure>
                        <div class="category-content">
                            <h3>{{ $categories[3]->name}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="product-category content-left-bottom hidden-count overlay-darker">
                    <a href="{{ route('proto-view-all-products', ['cat' => $categories[4]->id, 'sub_cat' => -1]) }}">
                        <figure>
                            <img src="{{ asset($categories[4]->image) }}">
                        </figure>
                        <div class="category-content">
                            <h3>{{ $categories[4]->name}}</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 col-md-5">
                <div class="product-category content-left-bottom hidden-count overlay-darker">
                    <a href="{{ route('proto-view-all-products', ['cat' => $categories[5]->id, 'sub_cat' => -1]) }}">
                        <figure>
                            <img src="{{ asset($categories[5]->image) }}">
                        </figure>
                        <div class="category-content">
                            <h3>{{ $categories[5]->name}}</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    @if ($weekly_featured_section !== -1)
    <section class="featured-products">
        <h2>weekly featured products</h2>

        <div class="owl-carousel owl-theme" data-toggle="owl" data-owl-options="{
            'loop': false,
            'dots': false,
            'nav' : true,
            'margin': 20,
            'items': 2,
            'autoplay' : false,
            'autoplayTimeout': 5000,
            'responsive': {
                '559': {
                    'items': 3
                },
                '975': {
                    'items': 4
                }
            }
        }">
        @foreach ($homepage_sections[$weekly_featured_section]->product_list as $product_list)
            <div class="product-default inner-icon inner-icon-inline  center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset($product_list->product->thumbnail_image) }}">
                    </a>
                    <div class="btn-icon-group">
                        <button class="btn-icon btn-add-cart" data-toggle="modal" data-target="#addCartModal" onclick="handleAddToCart({{$product_list->product->id}})"><i class="icon-bag"></i></button>
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
                        <a href="product.html">{{ $product_list->product->name }}</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">{{ $product_list->product->price }}</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div> 
        @endforeach
                       
        </div>
    </section>
    @endif

    

    <section>
        <div class="home-banner banner-deals" style="background-image: url('{{ asset('/assets/porto-theme/images/banners/banner-deals.jpg') }});">
            <div class="banner-content">
                <h3>never miss any deals</h3>
                <p>subscribe to the newsletter!</p>
                <form action="#" method="get">
                    <div class="submit-wrapper">
                        <input type="email" class="form-control" name="q" id="q" placeholder="Enter email address..." required>
                        <button class="btn" type="submit">SUBSCRIBE</button>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div>
        </div>

    </section>
</div>
@endsection

@section('page-script')
<script src="{{ asset('/assets/porto-theme/js/pages/index.js') }}"></script>
@endsection