@extends('themes.porto.layout.app')

@section('content') 
<div class="container">
    <section>
        <div class="row row-sm align-items-center">
            <div class="col-lg-8">
                <div class="home-slider owl-carousel owl-carousel-lazy owl-theme">
                    <div class="home-slide" class="owl-lazy">
                        <img class="owl-lazy" src="{{ asset('assets/porto-theme/images/lazy.png') }}" data-src="" alt="slider image">
                        <img src="{{ asset('assets/porto-theme/images/slider/slide1.jpg') }}">
                        <div class="home-slide-content1">
                            <h2>chairs</h2>
                            <p>custom designs<br>you can afford</p>
                            <button class="btn btn-dark">view the collection</button>
                        </div>
                    </div>
                    <div class="home-slide" class="owl-lazy">
                        <img class="owl-lazy" src="{{ asset('assets/porto-theme/images/lazy.png') }}" data-src="" alt="slider image">
                        <img src="{{ asset('assets/porto-theme/images/slider/slide2.jpg') }}">
                        <div class="home-slide-content2">
                            <span>up to <strong>40%</strong> off</span>
                            <h2>new arrivals</h2>
                            <p>Starting at $9</p>
                            <button class="btn btn-dark">shop now</button>
                        </div>
                    </div>
                    <div class="home-slide" class="owl-lazy">
                        <img class="owl-lazy" src="{{ asset('/assets/porto-theme/images/lazy.png') }}" data-src="" alt="slider image">
                        <img src="{{ asset('/assets/porto-theme/images/slider/slide1.jpg') }}">
                        <div class="home-slide-content1">
                            <h2>chairs</h2>
                            <p>custom designs<br>you can afford</p>
                            <button class="btn btn-dark">view the collection</button>
                        </div>
                    </div>
                    <div class="home-slide" class="owl-lazy">
                        <img class="owl-lazy" src="{{ asset('/assets/porto-theme/images/lazy.png') }}" data-src="" alt="slider image">
                        <img src="{{ asset('/assets/porto-theme/images/slider/slide2.jpg') }}">
                        <div class="home-slide-content2">
                            <span>up to <strong>40%</strong> off</span>
                            <h2>new arrivals</h2>
                            <p>Starting at $9</p>
                            <button class="btn btn-dark">shop now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <form action="#" method="get" class="find-form">
                    <h3>find a product</h3>
                    <div class="select-custom">
                        <select class="form-control" id="byCategory">
                            <option disabled="" selected="" hidden="">BY CATEGORY</option>
                            <option>FASHION</option>
                            <option>FURNITURE</option>
                            <option>DECORE</option>
                            <option>ACCESORIES</option>
                            <option>MOBILE</option>
                            <option>FOOTWEAR</option>
                        </select>
                    </div>
                    <div class="select-custom">
                        <select class="form-control" id="byBrand">
                            <option disabled="" selected="" hidden="">BY BRAND</option>
                            <option>Paradoxx</option>
                            <option>iCompany</option>
                            <option>JET ORANGE</option>
                            <option>iMessenger</option>
                            <option>VOREED</option>
                        </select>
                    </div>
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
                    <a href="#">
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
            <div class="product-default inner-icon inner-icon-inline  center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/product1.jpg') }}">
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
                        <a href="product.html">Black Chair Top</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>

            <div class="product-default inner-icon inner-icon-inline center-details ">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/product2.jpg') }}">
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
                        <a href="product.html">Brown Food Recipent</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>

            <div class="product-default inner-icon inner-icon-inline center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/product3.jpg') }}">
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
                        <a href="product.html">Modern White Chair</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>

            <div class="product-default inner-icon inner-icon-inline  center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/product4.jpg') }}">
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
                        <a href="product.html">Black Metal Light Bulb</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>

            <div class="product-default inner-icon inner-icon-inline  center-details">
                <figure>
                    <a href="product.html">
                        <img src="{{ asset('/assets/porto-theme/images/products/product1.jpg') }}">
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
                        <a href="product.html">Black Chair Top</a>
                    </h2>
                    <div class="price-box">
                        <span class="product-price">$56.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
        </div>
    </section>

    <section>
        <h2>offers and deals</h2>

        <div class="banner-offers row row-sm">
            <div class="col-md-6">
                <div class="home-banner">
                    <img src="{{ asset('/assets/porto-theme/images/banners/home-banner1.png') }}">
                    <div class="banner-content">
                        <h3>Jeans</h3>
                        <p>$10 cashback</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="home-banner">
                    <img src="{{ asset('/assets/porto-theme/images/banners/home-banner2.png') }}">
                    <div class="banner-content">
                        <h3>25%Off</h3>
                        <button class="btn">view the collection</button>
                    </div>
                </div>
            </div>
        </div>

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

    <section class="partners-panel">
        <div class="partners-carousel owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
            'loop' : true,
            'nav': true,
            'dots': false,
            'margin' : 40,
            'autoHeight': true,
            'autoplay': false,
            'autoplayTimeout': 5000,
            'responsive': {
              '0': {
                'items': 2,
                'margin': 10
              },
              '655': {
                'items': 3
              },
              '960' : {
                'items' : 4
              },
              '1200': {
                'items': 5
              }
            }
        }">
            <img src="{{ asset('/assets/porto-theme/images/logos/1.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/2.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/3.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/4.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/5.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/1.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/2.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/3.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/4.png') }}" alt="logo">
            <img src="{{ asset('/assets/porto-theme/images/logos/5.png') }}" alt="logo">
        </div>
    </section>
</div>
@endsection