@extends('themes.citroen.layout.app')
@section('mega-menu-display')
 <?php $mega_menu_display = 'none'; ?>
@endsection
@section('content')
<section class="main-container col2-left-layout">
    <div class="container">
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
            <ul>
              <li class="home"> <a href="index-2.html" title="Go to Home Page">Home</a> <span>/</span> </li>
              @if($cat_name !== null)
              <li> <a href="{{ route('view-all-products', ['cat' => $cat, 'sub_cat' => -1]) }}" title="">{{ $cat_name }}</a> <span>/ </span> </li>
              @endif
              @if($sub_cat_name !== null)
              <li> <a href="{{ route('view-all-products', ['cat' => $cat, 'sub_cat' => $sub_cat]) }}" title="">{{ $sub_cat_name }}</a> <span>/</span> </li>
              @endif
            </ul>
          </div>
           <!-- Breadcrumbs End -->
      <div class="row">
        <div class="col-sm-9 col-sm-push-3"> 
          
          <div class="category-description std">
            <div class="slider-items-products">
              <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col1 owl-carousel owl-theme"> 
                  @foreach ($banners as $banner)
                  <div class="item"> <a href="#"><img alt="" src="{{ asset($banner->image) }}"></a>
                    {{-- <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Season 2021</div>
                      <h2 class="cat-heading">Televisions</h2>
                      <p>GET 40% OFF &sdot; Free Delivery </p>
                    </div> --}}
                  </div>
                  @endforeach
                  {{-- <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="images/category-img1.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Season 2021</div>
                      <h2 class="cat-heading">Televisions</h2>
                      <p>GET 40% OFF &sdot; Free Delivery </p>
                    </div>
                  </div>
                  <!-- End Item --> 
                  
                  <!-- Item -->
                  <div class="item"> <a href="#"><img alt="" src="images/category-img2.jpg"></a>
                    <div class="cat-img-title cat-bg cat-box">
                      <div class="small-tag">Xperia Brands</div>
                      <h2 class="cat-heading">Smartwatches</h2>
                      <p>Save 70% on all items</p>
                    </div>
                    <!-- End Item --> 
                    
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="page-title">
            <h2> {{ $cat_name }} </h2>
            <p class="font-size-14 text-gray-90 mb-0">Showing {{ count($products) }}</p>
          </div>
          <article class="col-main">
          <div class="pro-listing">
            <div class="toolbar">
              <div class="row">
	<div class="col-xl-6 col-lg-6 col-sm-4 col-md-4 col-3">
		
			<div class="product-list-grid">
				<ul class="nav">
					<li class="nav-item">
							<a href="#" class="button-grid nav-link active">
								<i class="fa fa-th-large"></i>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="button-list nav-link">
								<i class="fa fa-bars"></i>
							</a>
						</li>
																						
									</ul>
			</div>
			</div>

	<div class="col-xl-6 col-lg-6 col-sm-8 col-md-8 col-9">
    <div class="pro-sorting">
			<form class="woocommerce-showing">
				<select name="showby" aria-label="show" class="show-filter">
											<option value="Show 20"  selected="selected">Show 20</option>
											<option value="Show 30">Show 30</option>
											<option value="Show 40">Show 40</option>
											<option value="Show 50">Show 50</option>

									</select>
							</form>
		</div>
		<div class="pro-sorting">
			<form class="woocommerce-ordering">
				<select name="orderby" aria-label="Shop order">
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by latest</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc"  selected="selected">Sort by price: high to low</option>
									</select>
							</form>
		</div>

		
	</div>
	
</div>
            </div>
            <div class="category-products">
              <ul class="products-grid">
                  @foreach ($products as $product)
                  <li class="item col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{asset($product->thumbnail_image)}}" height="192px"> </a>
                          {{-- <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="quick_view.html"></a> </li>
                              <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                              <li><a class="link-compare" href="compare.html"></a> </li>
                            </ul>
                          </div> --}}
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Retis lapen casen" href="{{ route('view-single-product', ['id' => $product->id]) }}">{{ $product->name }}</a> </div>
                          <div class="brand">{{ $product->brand->name }}</div>
                          <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                            </div>
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">tk{{$product->price}}</span> </span> </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endforeach             
              </ul>
            </div>
            <div class="pages">
                {{$products->links('themes.citroen.pagination.default')}}
            </div>
            
            <br>
            </div>
            
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
        <div class="widget widget-categories">
            <div class="block-title">Browse Categories</div>
            <div id="accordion" class="accordion">
            <!--Category -->
            @foreach ($categories as $key=>$category)
            <?php $area_extended = false;
                $collapse_in = '';
            if($key === 0) { $area_extended = true; $collapse_in = 'in'; } ?>
            <div class="card border-0 mb-2">
                <div class="card-header">
                  <h6 class="mb-0">
                    <a class="link-title" data-toggle="collapse" data-parent="#accordion" href="#{{ $category->id }}" aria-expanded="{{$area_extended}}">{{ $category->name }}</a>
                    </h6>
                </div>
                <div id="{{ $category->id }}" class="collapse {{$collapse_in}}" data-parent="#accordion">
                  <div class="card-body text-muted">
                    <ul class="list-unstyled">
                        @foreach ($category->sub_category as $sub_cat)
                            <li> <a href="{{ route('view-all-products', ['cat' => $cat, 'sub_cat' => $sub_cat]) }}">{{ $sub_cat->name }}</a></li>
                        @endforeach
                    </ul>
                  </div>
                </div>
              </div>
            @endforeach
              
            </div>
          </div>
          
          {{-- <div class="widget widget-filter">
                    <div class="block-title">Filter</div>
                    
            <div class="widget-brand">
            <h5 class="widget-title">Brand</h5>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck1">
              <label class="custom-control-label" for="brandCheck1"> Citroen</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck2">
              <label class="custom-control-label" for="brandCheck2"> Tiagoo</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck3">
              <label class="custom-control-label" for="brandCheck3"> Organtic</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck4">
              <label class="custom-control-label" for="brandCheck4"> Dealsdot</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="brandCheck5">
              <label class="custom-control-label" for="brandCheck5"> Harrier</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="brandCheck6">
              <label class="custom-control-label" for="brandCheck6"> Unicorn</label>
            </div>
          </div>  
          
          <div class="widget-color">
            <h5 class="widget-title">Colors</h5>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck1">
              <label class="custom-control-label" for="colorCheck1"><span style="background-color: rgb(60, 179, 113);"></span> Green</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck2">
              <label class="custom-control-label" for="colorCheck2"><span style="background-color:rgb(72, 118, 255)"></span> Blue</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck3">
              <label class="custom-control-label" for="colorCheck3"><span style="background-color:rgb(249, 79, 21)"></span> Orange</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck4">
              <label class="custom-control-label" for="colorCheck4"><span style="background: rgb(92, 36, 110);"></span> Purple</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="colorCheck5">
              <label class="custom-control-label" for="colorCheck5"><span style="background-color:rgb(255, 195, 0)"></span> Yellow</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck6">
              <label class="custom-control-label" for="colorCheck6"><span style="background-color:rgb(192, 192, 192)"></span> Silver</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck7">
              <label class="custom-control-label" for="colorCheck7"><span style="background-color:rgb(41, 36, 33)"></span> Black</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="colorCheck8">
              <label class="custom-control-label" for="colorCheck8"><span style="background-color:rgb(128, 0, 0)"></span> Maroon</label>
            </div>
            
          </div>  
          
          <div class="widget-ratings">
            <h5 class="widget-title">Customer Ratings</h5>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck1">
              <label class="custom-control-label" for="rateCheck1"> 4 <i class="fa fa-star" aria-hidden="true"></i> and above </label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck2">
              <label class="custom-control-label" for="rateCheck2"> 3 <i class="fa fa-star" aria-hidden="true"></i> and above</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck3">
              <label class="custom-control-label" for="rateCheck3"> 2 <i class="fa fa-star" aria-hidden="true"></i> and above</label>
            </div>
            <div class="custom-control custom-checkbox mb-2">
              <input type="checkbox" class="custom-control-input" id="rateCheck4">
              <label class="custom-control-label" for="rateCheck4"> 1 <i class="fa fa-star" aria-hidden="true"></i> and above</label>
            </div>
           
          </div>    
                    
          <div class="widget-price">
          <h5>Price Range</h5>
          <div class="wrapper">
  <fieldset class="filter-price">

    <div class="price-field">
      <input type="range" min="100" max="500" value="135" id="lower">
      <input type="range" min="100" max="500" value="500" id="upper">
    </div>
    <div class="price-wrap">
      <div class="price-container">
        <div class="price-wrap-1">

          <label for="one">$</label>
          <input id="one">
        </div>
        <div class="price-wrap_line">-</div>
        <div class="price-wrap-2">
          <label for="two">$</label>
          <input id="two">

        </div>
      </div>
    </div>
  </fieldset>
</div>
          </div>
          </div> --}}
          
          
          
          
          
          
          
     
            <div class="featured-add-box">
              <div class="featured-add-inner"> <a href="#"> <img src="{{ asset('assets/citroen-theme/images/hot-trends-banner.jpg') }}" alt="f-img"></a>
                <div class="banner-content">
                <div class="banner-text">Clearance Sale</div>
                <div class="banner-text1">Hot <span>Sale</span> </div>
                <p>save upto 20%</p>
                 </div>
              </div>
            </div>
   
          <div class="widget-latest">
            <div class="block-title"> Top Rated Products</div>
            <div class="block-content">
              <ul class="product-list">
                  @foreach ($recommended_product as $product)
                    <li class="item">
                        <figure class="featured-thumb"> <a href="#"> <img src="{{ asset($product->thumbnail_image) }}" alt="product image"> </a> </figure>
                        <!--featured-thumb-->
                        <div class="content-info">
                        <a href="grid.html" title="Lorem ipsum dolor sit amet">{{ $product->name }}</a>
                        {{-- <div class="star-rating">
                            <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                        </div> --}}
                        <div class="item-content">
                            <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">tk{{$product->price}}</span> </span> </div>
                            </div>                            
                            </div>
                        </div>                
                    </li>
                  @endforeach
                
              </ul>
           
            </div>
          </div>
        </aside>
      </div>
    </div>
    <div class="container">
    <div class="bestsell-pro mt-0 mb-60">
      <div>
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div class="block-title">
              <h2>Recommended</h2>
            </div>
            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                @foreach ($recommended_product as $product)
                <div class="item">
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{ asset($product->thumbnail_image) }}" height="190px"> </a>
                          <div class="new-label new-top-left">new</div>
                          {{-- <div class="box-hover">
                            <ul class="add-to-links">
                              <li><a class="link-quickview" href="quick_view.html"></a> </li>
                              <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                              <li><a class="link-compare" href="compare.html"></a> </li>
                            </ul>
                          </div> --}}
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">{{ $product->name }}</a> </div>
                          <div class="brand">{{$product->brand->name}}</div>
                          {{-- <div class="star-rating">
                                 <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                 </div> --}}
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">tk{{ $product->price }}</span> </span> </div>
                            </div>
                            <div class="action">
                              <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                
                <!-- Item -->
                {{-- <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product11.jpg"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Stovekraft Induction Stove with Feather touch </a> </div>
                        <div class="brand">Unicorn</div>
                        <div class="item-content">
                          <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item --> 
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product10.jpg"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Home Security Camera with Alarm System </a> </div>
                        <div class="brand">Harrier</div>
                        <div class="item-content">
                          <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
                        <div class="new-label new-top-left">new</div>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Fitness Smartwatch with Heart Rate Monitor </a> </div>
                        <div class="brand">Cruiser</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product8.jpg"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                        <div class="brand">Flipmart</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product7.jpg"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                        <div class="brand">Nexus</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product9.jpg"> </a>
                        <div class="box-hover">
                          <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                        <div class="brand">Dealsdot</div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <!-- End Item --> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
@endsection