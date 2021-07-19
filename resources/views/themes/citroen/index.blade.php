@extends('themes.citroen.layout.app')
@section('mega-menu-display')
 <?php $mega_menu_display = 'block'; ?>
@endsection
@section('content')
  <div class="container-fluid">
    <div class="row"> 
      <!-- Slider -->
      <div class="home-slider5">
        <div id="thmg-slideshow" class="thmg-slideshow">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{ asset('assets/citroen-theme/images/slide-img1.jpg') }}"><img src="{{ asset('assets/citroen-theme/images/slide-img1.jpg') }}"  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  <div class="container">
                    <div class="content_slideshow">
                      <div class="row">
                        <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                        <div class="col-lg-9 col-sm-9 col-md-9">
                          <div class="info">
                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Digital World</span> </div>
                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Smartphone</span> INCREDIBLE </div>
                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><span>- 60%</span>starting from $<em>139</em></div>
                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='images/slide-img2.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                  <div class="container">
                    <div class="content_slideshow">
                      <div class="row">
                        <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                        <div class="col-lg-9 col-sm-9 col-md-9">
                          <div class="info">
                            <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top Brands 2021</span> </div>
                            <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Smartwatch</span> Perfection </div>
                            <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><span>- 40%</span>starting from $<em>249</em></div>
                            <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="tp-bannertimer"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ============================================== SCROLL TABS ============================================== -->
  <div id="product-tabs-slider" class="scroll-tabs">
    <div class="more-info-tab clearfix">
      <ul class="nav nav-tabs nav-tab-line container">
        @foreach ($categories as $key=>$category)
          <?php if ($key === 7) break; ?>
          @if ($key === 0)
          <li class="active"> <a data-transition-type="backSlide" href="#{{$category->id}}" data-toggle="tab"> <img src="{{$category->image}}" alt="mobiles"> <span> {{$category->name}}</span> </a> </li> 
          @else
          <li> <a data-transition-type="backSlide" href="#{{$category->id}}" data-toggle="tab"> <img src="{{$category->image}}" alt="mobiles"> <span> {{$category->name}}</span> </a> </li>  
          @endif        
        @endforeach
        {{-- <li class="active"> <a data-transition-type="backSlide" href="#mobiles" data-toggle="tab"> <img src="images/mobile-img.jpg" alt="mobiles"> <span> Mobiles</span> </a> </li>
        <li> <a data-transition-type="backSlide" href="#television" data-toggle="tab"> <img src="images/tv-img.jpg" alt="Television"> <span>Television</span> </a> </li>
        <li> <a data-transition-type="backSlide" href="#camera" data-toggle="tab"> <img src="images/camera-img.jpg" alt="camera"> <span>Cameras</span> </a> </li>
        <li> <a data-transition-type="backSlide" href="#speakers" data-toggle="tab"> <img src="images/speakers.jpg" alt="Speakers"> <span>Speakers</span> </a> </li>
        <li> <a data-transition-type="backSlide" href="#laptop" data-toggle="tab"> <img src="images/laptop.jpg" alt="laptop"> <span>Laptops</span> </a> </li>
        <li> <a data-transition-type="backSlide" href="#watches" data-toggle="tab"> <img src="images/watchs.jpg" alt="Watches"> <span>Watches</span> </a> </li>
        <li> <a data-transition-type="backSlide" href="#refrigerator" data-toggle="tab"> <img src="images/refrigerator.jpg" alt="refrigerator"> <span>Refrigerator</span> </a> </li>
        <li> <a data-transition-type="backSlide" href="#mixer" data-toggle="tab"> <img src="images/mixer.jpg" alt="mixer"> <span> Mixer</span> </a> </li> --}}
      </ul>
      <!-- /.nav-tabs --> 
    </div>
    <div class="tab-content container">
      @foreach ($most_sold as $key=>$cat)
        <?php $active = "";
          if($key === 0) {
            $active = "active";
          } else {
            $active = "";
          }
        ?>
        @if (count($cat) > 0)
        <div class="tab-pane {{ $active }}" id="{{ $cat[0]->category->id }}">
          <div class="product-slider products-grid">
            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
              @foreach ($cat as $item)
                <div class="item item-carousel">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" href=""> <img alt="" src="{{ $item->thumbnail_image }}" height="190px"> </a>
                        <div class="box-hover">
                          {{-- <ul class="add-to-links">
                            <li><a class="link-quickview" href="quick_view.html"></a> </li>
                            <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                            <li><a class="link-compare" href="compare.html"></a> </li>
                          </ul> --}}
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html">{{ $item->name }}</a> </div>
                        <div class="brand">Datsun</div>
                        {{-- <div class="star-rating">
                                  <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                  </div> --}}
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">tk{{$item->price}}</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.products --> 
                </div>
                <!-- /.item -->
              @endforeach
              
              
              {{-- <div class="item item-carousel">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a>
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
                      <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                      <div class="brand">Xperia</div>
                      <div class="star-rating">
                                 <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                 </div>
                      <div class="item-content">
                        <div class="item-price">
                          <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a>
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
                      <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                      <div class="brand">Sunproto</div>
                      <div class="star-rating">
                                 <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                                 </div>
                      <div class="item-content">
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a>
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
                      <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                      <div class="brand">Organtic</div>
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
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                      <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                      <div class="brand">Tiagoo</div>
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
                <!-- /.products --> 
              </div>
              <!-- /.item -->
              
              <div class="item item-carousel">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                      <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
                <!-- /.products --> 
              </div> --}}
              <!-- /.item --> 
            </div>
            <!-- /.home-owl-carousel --> 
          </div>
          <!-- /.product-slider --> 
        </div>    
        @endif
      
      @endforeach
      
      <!-- /.tab-pane -->
      
      {{-- <div class="tab-pane" id="television">
        <div class="product-slider products-grid">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product13.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                    <div class="brand">Datsun</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Health & Fitness Smartwatch with Heart Rate Monitor </a> </div>
                    <div class="brand">Xperia</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product8.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">750 Watt Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                    <div class="brand">Sunproto</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product10.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Smart Home Security Camera with Intruder Alarm System</a> </div>
                    <div class="brand">Organtic</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                    <div class="brand">Tiagoo</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="camera">
        <div class="product-slider products-grid">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                    <div class="brand">Xperia</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product1.jpg"> </a>
                    <div class="sale-label sale-top-right">- 40%</div>
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
                    <div class="item-title"> <a href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a> </div>
                    <div class="brand">Datsun</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                    <div class="brand">Sunproto</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                    <div class="brand">Organtic</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                    <div class="brand">Tiagoo</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="speakers">
        <div class="product-slider products-grid">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product14.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Portable Smart Speaker with built-in WiFi, Bluetooth</a> </div>
                    <div class="brand">Datsun</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product9.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Multi-Function Direct Wireless Network Laser Printer </a> </div>
                    <div class="brand">Xperia</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product11.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Stovekraft plastic Induction Stove with Feather touch</a> </div>
                    <div class="brand">Sunproto</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product7.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                    <div class="brand">Organtic</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                    <div class="brand">Tiagoo</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="laptop">
        <div class="product-slider products-grid">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product1.jpg"> </a>
                    <div class="sale-label sale-top-right">- 40%</div>
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
                    <div class="item-title"> <a href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a> </div>
                    <div class="brand">Datsun</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                    <div class="brand">Xperia</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                    <div class="brand">Sunproto</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                    <div class="brand">Organtic</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                    <div class="brand">Tiagoo</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="watches">
        <div class="product-slider products-grid">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
                    <div class="sale-label sale-top-right">- 60%</div>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
                    <div class="brand">Datsun</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                    <div class="brand">Xperia</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                    <div class="brand">Sunproto</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product12.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Anti Glare Side Narrow Border Display Laptop </a> </div>
                    <div class="brand">Organtic</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                    <div class="brand">Tiagoo</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="refrigerator">
        <div class="product-slider products-grid">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product7.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                    <div class="brand">Datsun</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                    <div class="brand">Xperia</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                    <div class="brand">Sunproto</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                    <div class="brand">Organtic</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                    <div class="brand">Tiagoo</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div>
      <!-- /.tab-pane -->
      
      <div class="tab-pane" id="mixer">
        <div class="product-slider products-grid">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product8.jpg"> </a>
                    <div class="sale-label sale-top-right">- 25%</div>
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
                    <div class="item-title"> <a href="product_detail.html">750 Watt Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                    <div class="brand">Datsun</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                    <div class="brand">Xperia</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                    <div class="brand">Sunproto</div>
                    <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                    <div class="item-content">
                      <div class="item-price">
                        <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                      </div>
                      <div class="action">
                        <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                    <div class="brand">Organtic</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                    <div class="brand">Tiagoo</div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item -->
            
            <div class="item item-carousel">
              <div class="item-inner">
                <div class="item-img">
                  <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                    <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
              <!-- /.products --> 
            </div>
            <!-- /.item --> 
          </div>
          <!-- /.home-owl-carousel --> 
        </div>
        <!-- /.product-slider --> 
      </div> --}}
      <!-- /.tab-pane --> 
      
    </div>
    <!-- /.tab-content --> 
  </div>
  <!-- /.scroll-tabs --> 
  <!-- ============================================== SCROLL TABS : END ============================================== -->
  
  {{-- <div class="section-element container">
    <div class="row">
      <div class="large-6">
        <div class="wpb_wrapper">
          <div class="banner">
            <div class="banner-content">
              <h3>Citroen Special Deals</h3>
              <h4>Security Camera </h4>
              <h5>Sale upto 50% off </h5>
            </div>
            <div class="banner-img"> <a href="#"><img src="images/banner1.jpg" alt=""></a> </div>
          </div>
        </div>
      </div>
      <div class="nasa-col large-6 columns desktop-padding-left-5  vc_">
        <div class="wpb_wrapper">
          <div class="large-6">
            <div class="wpb_wrapper">
              <div class="banner">
                <div class="banner-content1">
                  <h6>"Digital"</h6>
                  <h3>Use Promo Code</h3>
                  <p>Get Upto 20% Off</p>
                </div>
                <div class="banner-img"> <a href="#"><img src="images/h2-banner-white.jpg" alt=""> </a> </div>
              </div>
            </div>
          </div>
          <div class="large-6">
            <div class="wpb_wrapper">
              <div class="banner">
                <div class="banner-img"> <a href="#"> <img src="images/banner2.jpg" alt=""> </a> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row margin-top-5">
          <div class="large-12">
            <div class="wpb_wrapper">
              <div class="banner">
                <div class="banner-content">
                  <h3>Todays deals</h3>
                  <h4>Bluetooth</h4>
                  <h5>starting @ $199</h5>
                </div>
                <div class="banner-img"> <a href="#"> <img src="images/banner3.jpg" alt=""> </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="container">
    <div class="content-page"> 
      
      <!-- featured category -->
      <div class="category-product">
        <div class="navbar nav-menu">
          <div class="navbar-collapse">
            <ul class="nav navbar-nav">
              @for ($i = 0; $i < 3; $i++)
                @if ($i == 0)
                <li class="active"><a data-toggle="tab" href="#tab-{{$i}}">{{ $homepage_sections[$i]->section_name }}</a></li>
                @else
                <li class=""><a data-toggle="tab" href="#tab-{{$i}}">{{ $homepage_sections[$i]->section_name }}</a></li>
                @endif                
              @endfor              
              {{-- <li class=" "><a data-toggle="tab" href="#tab-2">New Arrivals</a></li>
              <li class=""><a data-toggle="tab" href="#tab-3" class="active">Todays Deals</a></li> --}}
            </ul>
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <div class="product-bestseller">
          <div class="product-bestseller-content">
            <div class="product-bestseller-list">
              <div class="tab-container"> 
                <!-- tab product -->
                @for ($i = 0; $i < 3; $i++)
                <?php 
                  if($i === 0) {
                    $active = 'active';
                  } else {
                    $active = '';
                  }
                  
                ?>
                <div class="tab-panel {{ $active }}" id="tab-{{$i}}">
                  <div class="category-products">
                    <ul class="products-grid">
                      @foreach ($homepage_sections[$i]->product_list as $product_list)
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{ $product_list->product->thumbnail_image }}"> </a>
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
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">{{ $product_list->product->name }}</a> </div>
                              @if ($product_list->product->brand_id !== null)
                                <div class="brand">{{ $product_list->product->brand_id->name }}</div>
                              @endif
                              
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">tk{{ $product_list->product->price }}</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End  Item inner--> 
                      </li>
                      @endforeach
                    </ul>
                  </div>
                </div>  
                @endfor
                
                
                <!-- tab product -->
                <div class="tab-panel " id="tab-2">
                  <div class="category-products">
                    <ul class="products-grid">
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a>
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
                              <div class="item-title"> <a href="product_detail.html"> NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
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
                        <!-- End  Item inner--> 
                      </li>
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product5.jpg"> </a>
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
                              <div class="item-title"> <a href="product_detail.html"> Wireless Headphone with Ergonomic Aesthetics </a> </div>
                              <div class="brand">Tonrex</div>
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
                        <!-- End  Item inner--> 
                      </li>
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a>
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
                              <div class="item-title"> <a href="product_detail.html">Health & Fitness Smartwatch with Heart Rate Monitor</a> </div>
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
                        <!-- End  Item inner--> 
                      </li>
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product7.jpg"> </a>
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
                              <div class="item-title"> <a href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                              <div class="brand">Datsun</div>
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
                        <!-- End  Item inner--> 
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="tab-panel " id="tab-3">
                  <div class="category-products">
                    <ul class="products-grid">
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product1.jpg"> </a>
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
                              <div class="item-title"> <a href="product_detail.html">Anti Glare Side Narrow Border Display Laptop </a> </div>
                              <div class="brand">Qualis</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"><span class="regular-price"> <span class="price">$88.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End  Item inner--> 
                      </li>
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a>
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
                              <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                              <div class="brand">Xperia</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End  Item inner--> 
                      </li>
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a>
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
                              <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                              <div class="brand">Sonet</div>
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
                        <!-- End  Item inner--> 
                      </li>
                      <li class="item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a>
                              <div class="sale-label sale-top-right">- 40%</div>
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
                              <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                              <div class="brand">Citroen</div>
                              <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End  Item inner--> 
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="container">
    <div class="wide-banner">
      <div class="row">
        <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"><img src="images/watch.jpg" alt="">
          <div class="static-text"> <span class="banner-text">coupon: lapoto30save</span> <span class="banner-text-normal"><b>$75 Cashback</b><br>
            on Bluetooth<br>
            Speaker</span> </div>
        </div>
        <div class="figure banner-with-effects effect-sadie1 banner-width  with-button"><img src="images/shoes-banner.jpg" alt="">
          <div class="static-text"> <span class="banner-text">coupon: disco30save</span> <span class="banner-text-normal"><b>Discount 30%</b><br>
            on Wireless<br>
            Speaker</span> </div>
        </div>
      </div>
    </div>
  </div> --}}
  <div class="ads-block">
    <div class="container">
      <div class="row">
        <div class="banner-text-big">Save 40% on Home Appliance <br>
          Store Available!!</div>
        <div class="banner-text-normal">don't miss our weekend specials. <a href="#">Grab offer now</a></div>
      </div>
    </div>
  </div>
  <section class="deals-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Deal of the day</h2>
          <div class="box-timer">
            <div class="countbox_1 timer-grid"></div>
          </div>
          <div class="hot-deal">
            <ul class="products-grid">
              <li class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="products-images/product12.jpg" alt="Retis lapen casen"> </a>
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
                      <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Anti Glare Side Narrow Border Display Laptop </a> </div>
                      <div class="brand">Sonet</div>
                      <div class="item-content">
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="products-images/product3.jpg" alt="Retis lapen casen"> </a>
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
                      <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </div>
                      <div class="brand">Dealsdot</div>
                      <div class="item-content">
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                        </div>
                        <button onclick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Add to Cart</button>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="products-images/product6.jpg" alt="Retis lapen casen"> </a>
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
                      <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Health & Fitness Smartwatch with Heart Rate Monitor </a> </div>
                      <div class="brand">Citroen</div>
                      <div class="item-content">
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="products-images/product10.jpg" alt="Retis lapen casen"> </a>
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
                      <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Smart Home Security Camera with Intruder Alarm System </a> </div>
                      <div class="brand">Xperia</div>
                      <div class="item-content">
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="products-images/product11.jpg" alt="Retis lapen casen"> </a>
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
                      <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Stovekraft plastic Induction Stove with Feather touch </a> </div>
                      <div class="brand">Flipmart</div>
                      <div class="item-content">
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> <span class="old-price"><span class="price">$199.00</span></span></div>
                        </div>
                        <div class="action">
                          <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    // Checks if best seller section exists in the backend
    $bestSellerIndex = -1;
    foreach ($homepage_sections as $key=>$sections) {
      if(strtoupper($sections->name) === strtoupper('Best Sellers') || strtoupper($sections->name) === strtoupper('Best Seller')) {
        $bestSellerIndex = $key;
        break;
      }
    }
  ?>
  @if ($bestSellerIndex !== -1)
  <div class="container">
    <div class="bestsell-pro">
      <div>
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div class="block-title">
              <h2>Best Sellers</h2>
            </div>
            <div id="bestsell-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                @foreach ($homepage_sections[$bestSellerIndex]->product_list as $product_list)
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="{{ $product_list->product->thumbnail_image }}"> </a>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">{{ $product_list->product->name }}</a> </div>
                        @if ($product_list->product->brand_id !== null)
                          <div class="brand">{{ $product_list->product->brand_id->name }}</div>
                        @endif
                        
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">tk{{ $product_list->product->price }}</span> </span> </div>
                          </div>
                          <div class="action">
                            <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><i class="fa fa-shopping-basket"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End  Item inner--> 
                </dov>
                @endforeach 
                <!-- -->
                {{-- <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product12.jpg"> </a>
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
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Anti Glare Side Narrow Border Display Laptop</a> </div>
                        <div class="brand">Tonrex</div>
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
  @endif
  
  <div class="container">
    <div class="bestsell-pro recent-pro">
      <div>
        <div class="slider-items-products">
          <div class="bestsell-block">
            <div class="block-title">
              <h2>Recently Viewed</h2>
            </div>
            <div class="banner-img-rec"><img alt="" src="images/banner-img.jpg"></div>
            <div id="recent-pro-slider" class="product-flexslider hidden-buttons">
              <div class="slider-items slider-width-col4 products-grid block-content">
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product1.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Anti Glare  Narrow Border Display Laptop</a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$168.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product7.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$79.00</span> </span> </div>
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
                      <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product2.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html"> Point and Shoot Camera with 12x Optical Zoom </a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$275.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product9.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$149.00</span> </span> </div>
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
                      <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product3.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html">Siomons Galaxy N31 Ocean Blue, 128GB Storag</a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" href="product_detail.html"> <img alt="" src="products-images/product4.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a href="product_detail.html">NoePlus 4K Ultra HD Android Smart LED Television </a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$129.00</span> </span> </div>
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
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product6.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Fitness Smartwatch with Heart Rate Monitor </a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product8.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Mixer Grinder with 3 Stainless Steel Jar</a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product7.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">5 Star Direct Cool Single Door Refrigerator</a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="" src="products-images/product9.jpg"> </a> </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html">Direct Wireless Network Laser Printer</a> </div>
                        <div class="star-rating">
                               <span style="width:60%">Rated <strong class="rating">3.00</strong> out of 5</span>
                               </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
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
      </div>
      <div class="wide-banner1 cnt-strip">
        <div class="image"> <img class="img-responsive" src="images/home-banner.jpg" alt=""> </div>
        <div class="strip strip-text">
          <div class="strip-inner">
            <h3 class="text-left">Which <br> <strong>Notbook</strong><br> is right for you?</h3>
          
          </div>
        </div>
          <a href="#"><span>$499</span> Buy Now</a>
        <!-- /.new-label --> 
      </div>
    </div>
  </div>
  
  <!-- Latest Blog -->
  
  {{-- <section class="home-articles spacer-medium">
    <div class="container">
      <div class="css-grid--columns-2">
        <div class="article-home">
          <div class="article-home__image parallax-parent"> <img src="images/Sophie_editorail-16_500x.jpg" class="parallax-child--second" alt="article image"> </div>
          <div class="article-home__content">
            <div class="inside">
              <p class="date">June 01, 2018</p>
              <h4 class="title">Premium template with unlimited colours</h4>
              <a href="#" class="link">Read more <i class="fa fa-chevron-circle-right"></i></a> </div>
          </div>
        </div>
        <div class="article-home">
          <div class="article-home__image parallax-parent"> <img src="images/BLOG_2_square_1000x.jpg" class="parallax-child--second" alt="article image"> </div>
          <div class="article-home__content">
            <div class="inside">
              <p class="date">June 14, 2018</p>
              <h4 class="title">Awesome template with lot's of features</h4>
              <a href="#" class="link">Read more <i class="fa fa-chevron-circle-right"></i></a> </div>
          </div>
        </div>
        <div class="article-home">
          <div class="article-home__image parallax-parent"> <img src="images/drake_500x.jpg" class="parallax-child--second" alt="article image"> </div>
          <div class="article-home__content">
            <div class="inside">
              <p class="date">June 07, 2018</p>
              <h4 class="title">unlimited colors with good design</h4>
              <a href="#" class="link">Read more <i class="fa fa-chevron-circle-right"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  
  <!-- End Latest Blog --> 
  @endsection