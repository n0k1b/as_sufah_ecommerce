<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesground.com/citroen-demo/V1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 07:11:37 GMT -->
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicons Icon -->
<link rel="icon" href="#" type="image/x-icon" />
<link rel="shortcut icon" href="#" type="image/x-icon" />
<title>Citroen premium HTML5 &amp; CSS3 template</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/font-awesome.min.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/simple-line-icons.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/jquery.bxslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/jquery.mobile-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/style.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/citroen-theme/css/revslider.css') }}">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
</head>
<body class="cms-index-index cms-home-page home">
<div id="page"> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 pull-left">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{{ asset('assets/citroen-theme/images/english.png') }}" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"> <a href="#"><img src="{{ asset('images/english.png') }}" alt="language"> English </a> </li>
                <li role="presentation"> <a href="#"><img src="{{ asset('images/francais.png') }}" alt="language"> French </a> </li>
                <li role="presentation"> <a href="#"><img src="{{ asset('images/german.png') }}" alt="language"> German </a> </li>
              </ul>
            </div>
            <!-- End Header Language --> 
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a href="#"> $ - Dollar </a> </li>
                <li role="presentation"><a href="#"> £ - Pound </a> </li>
                <li role="presentation"><a href="#"> € - Euro </a> </li>
              </ul>
            </div>
            <!-- End Header Currency -->
            <div class="welcome-msg"> Default welcome msg! </div>
          </div>
          <!-- Header Top Links -->
          <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-right hidden-xs">
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a> </div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a> </div>
                <div class="check"><a title="Checkout" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a> </div>
                <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a> </div>
                <!-- Header Company -->
                <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> Company <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li role="presentation"><a href="about_us.html"> About Us </a> </li>
                    <li role="presentation"><a href="#"> Customer Service </a> </li>
                    <li role="presentation"><a href="#"> Privacy Policy </a> </li>
                    <li role="presentation"><a href="sitemap.html">Site Map </a> </li>
                    <li role="presentation"><a href="#">Search Terms </a> </li>
                    <li role="presentation"><a href="#">Advanced Search </a> </li>
                  </ul>
                </div>
                <!-- End Header Company -->
                <div class="login"><a href="login.html"><span class="hidden-xs">Login</span></a> </div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block"> 
          <!-- Header Logo -->
          <div class="logo"> <a title="Citroen" href="{{ route('home') }}"><img alt="Citroen" src="{{ asset('/image/organization_logo').'/'.$logo }}" height="80px"> </a> </div>
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
          <div class="contact-row">
            <div class="phone inline"> <i class="fa fa-phone"></i> (+800) 123 456 7890 </div>
            <div class="contact inline"> <i class="fa fa-envelope"></i> contact@<span class="le-color">oursupport.com</span> </div>
          </div>
          <div class="search-box">
            <form id="search_mini_form" action="#" method="get">
              <!-- Autocomplete End code -->
              <input id="search" type="text" name="q" value="Search entire store here..." class="searchbox" maxlength="128">
              <ul class="categories-filter animate-dropdown">
                <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                  <ul class="dropdown-menu" role="menu" >
                    @foreach ($categories as $category)
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- {{ $category->name }}</a></li>
                    @endforeach
                    
                    {{-- <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Appliances</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Televisions</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Cameras</a></li> --}}
                  </ul>
                </li>
              </ul>
              <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
            </form>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
          </div>
          <div class="top-cart-contain"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"><span>Shopping Cart</span> <span class="cart_count" id="nav-cart-count">2</span>
                <div class="price" id="nav-cart-total-price">$4580</div>
                </a> </div>
              <div>
                <div class="top-cart-content"> 
                  <!--block-subtitle-->
                  <ul class="mini-products-list" id="cart-sidebar">
                    {{-- <li class="item first">
                      <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img alt="Retis lapen casen" src="{{ asset('assets/citroen-theme/products-images/product6.jpg') }}"> </a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> </div>
                          <p class="product-name"><a href="#">Health & Fitness Smartwatch with Heart Rate Monitor</a> </p>
                          1 x <span class="price">$179.99</span> </div>
                      </div>
                    </li>
                    <li class="item last">
                      <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"><img alt="Retis lapen casen" src="{{ asset('assets/citroen-theme/products-images/product3.jpg') }}"> </a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> </div>
                          <p class="product-name"><a href="#">Siomons Galaxy N31 Ocean Blue, 8GB RAM, 128GB Storag</a> </p>
                          1 x <span class="price">$80.00</span> </div>
                      </div>
                    </li> --}}
                  </ul>
                  <!--actions-->
                  <div class="actions">
                    <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span> </button>
                    <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          <!-- thm wishlist --> 
        </div>
      </div>
    </div>
    <nav class="hidden-xs">
      <div class="nav-container">
        <div class="col-md-3 col-xs-12 col-sm-3">
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3><i class="fa fa-bars" aria-hidden="true"></i> All Categories</h3>
              </div>
              @yield('mega-menu-display')
              <div class="mega-menu-category" style="display: {{$mega_menu_display}}">
                <ul class="nav">
                  @foreach ($categories as $category)
                  @if (count($category->sub_category) > 0)
                    <li class="dropdown"> <a href="index-2.html" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>{{ $category->name }}</a>
                      <div class="dropdown-menu wrap-popup column1">
                        <div class="popup">
                          <ul class="nav">
                            @foreach ($category->sub_category as $sub_cat)
                              <li><a href="{{ route('view-all-products', ['cat' => $category->id, 'sub_cat'=>$sub_cat->id]) }}">{{ $sub_cat->name }}</a></li>
                            @endforeach
                          </ul>
                        </div>
                      </div>
                    </li>
                  @endif                  
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- features box -->
        <div class="our-features-box hidden-xs">
          <div class="features-block">
            <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9 offer-block"> <a href="#">New Arrivals</a> <a href="#">Special</a> <a href="#">Value of the day</a> <a href="#">Gift Cards</a> <a href="#">Citroen Wallet</a> <span>Free Worldwide Delivery</span> </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- end header -->
  @yield('content')
  <!-- Footer -->
  <footer class="footer">
    <div class="news-letter-form">
      <div class="container">
        <div class="row">
          <div class="newsletter-wrap">
            <div class="col-xs-12">
              <div class="newsletter">
                <form>
                  <div>
                    <h4><span>Sign up to Newsletter</span></h4>
                    <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">
                    <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--newsletter-->
    
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Shopping Guide</h4>
              <ul class="links">
                <li><a href="blog.html" title="How to buy">Blog</a></li>
                <li><a href="faq.html" title="FAQs">FAQs</a></li>
                <li><a href="#" title="Payment">Payment</a></li>
                <li><a href="#" title="Shipment">Shipment</a></li>
                <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                <li><a href="#" title="Return policy">Return policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li><a href="login.html" title="Your Account">Your Account</a></li>
                <li><a href="#" title="Information">Information</a></li>
                <li><a href="#" title="Addresses">Addresses</a></li>
                <li><a href="#" title="Addresses">Discount</a></li>
                <li><a href="#" title="Orders History">Orders History</a></li>
                <li><a href="#" title="Order Tracking">Order Tracking</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Information</h4>
              <ul class="links">
                <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                <li><a href="#" title="Search Terms">Search Terms</a></li>
                <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                <li><a href="about_us.html" title="About Us">About Us</a></li>
                <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                <li><a href="#" title="Suppliers">Suppliers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <h4>Contact Us</h4>
            <div class="contacts-info">
              <address>
              <i class="add-icon"></i>ThemesGround, 789 Main rd,<br>
              Anytown, CA 12345 USA<br>
              </address>
              <div class="phone-footer"><i class="phone-icon"></i>+ 888 456-7890</div>
              <div class="email-footer"><i class="email-icon"></i><a href="mailto:abc@example.com">citroen@themesground.com</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-7 col-md-12 col-lg-7 del-info"> We have our very own fleet of delivery vans. Your order will be packed with care at our warehouse and delivered right to your door by our friendly Citroen team.</div>
          <div class="col-xs-12 col-sm-5">
            <div class="payment-accept"> <img src="images/payment-1.png" alt=""> <img src="images/payment-2.png" alt=""> <img src="images/payment-3.png" alt=""> <img src="images/payment-4.png" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <div class="social">
            <ul>
              <li class="fb"><a href="#"></a></li>
              <li class="tw"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="rss"><a href="#"></a></li>
              <li class="pintrest"><a href="#"></a></li>
              <li class="linkedin"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-xs-12 coppyright"> &copy; 2021 themesground. all rights reserved. </div>
      </div>
    </div>
    <div class="other-links">
      <div class="container">
        <div class="row">
          <div class="category-block"> <strong><a href="#">Mobiles Accessories:</a></strong> <a href="#">Mobile Covers</a> / <a href="#">Leather Mobile Covers</a> / <a href="#">Printed Back Covers</a> / <a href="#">10000mAh Power Banks</a> / <a href="#">Ambrane Power Banks</a> / <a href="#">Intex Power Banks</a> / <a href="#">VR Headsets</a> / <a href="#">Smart Watches</a> / <a href="#">Smart Bands</a> / <a href="#">Fitness Bands</a> / <a href="#">Tempered Glass</a> / <a href="#">Wall Chargers</a> / <a href="#">Feature Phones</a> / <a href="#">Bluetooth Devices</a> </div>
          <div class="category-block"> <strong><a href="#">TVs, Audio & Video:</a></strong> <a href="#">Televisions</a> / <a href="#">LED TVs</a> / <a href="#">Smart Televisions</a> / <a href="#">Ultra HD TV</a> / <a href="#">FHD TV / 3D TV</a> / <a href="#">HD Ready TV</a> / <a href="#">Speakers</a> / <a href="#">Headphones</a> / <a href="#">Earphones</a> / <a href="#">Samsons Televisions</a> / <a href="#">Xicromax Televisions</a> / <a href="#">TG Televisions</a> / <a href="#">Home Theatre Systems</a> </div>
          <div class="category-block"> <strong><a href="#">Memory Cards:</a></strong> <a href="#">8 GB Memory Cards</a> / <a href="#">16 GB Memory Cards</a> / <a href="#">32 GB Memory Cards</a> / <a href="#">64 GB Memory Cards</a> / <a href="#">Tandisk Memory Cards</a> / <a href="#">Samsons Memory Cards</a> / <a href="#">Atrontium Memory Cards</a> </div>
          <div class="category-block"> <strong><a href="#">Computers:</a></strong> <a href="#">Aenovo Laptops</a> / <a href="#">Ncer Laptops</a> / <a href="#">Mpple Macbooks</a> / <a href="#">Notebook</a> / <a href="#">Laptops</a> / <a href="#">External Hard Disks</a> / <a href="#">Hell Laptops</a> / <a href="#">PP Laptops</a> / <a href="#">Pen Drives</a> </div>
          <div class="category-block"> <strong><a href="#">Camera:</a></strong> <a href="#">DSLR Cameras</a> / <a href="#">Sanon Cameras</a> /<a href="#"> Nicon Coolpix</a> / <a href="#">Nicon DSLR Cameras</a> / <a href="#">Mony Cameras</a> / <a href="#">Digital Cameras</a> / <a href="#">Sanasonic Cameras</a> / <a href="#">Samsons Cameras</a> </div>
          <div class="category-block"> <strong><a href="#">Watches:</a></strong> <a href="#">Mens Watches</a> / <a href="#">Womens Watches</a> / <a href="#">Nasio Watches</a> / <a href="#">Fitan Watches</a> / <a href="#">Mastrack Watches</a> / <a href="#">Cossil watches</a> / <a href="#">Nasio Edifice</a> </div>
          <div class="category-block"> <strong><a href="#">Appliances:</a></strong> <a href="#">Air Conditioners</a> / <a href="#">Air Coolers</a> / <a href="#">Refrigerators</a> / <a href="#">Fans</a> / <a href="#">Washing Machines</a> / <a href="#">Mircowaves</a> / <a href="#">Irons</a> / <a href="#">Trimmers</a> / <a href="#">Hair Dryers</a> / <a href="#">Shavers</a> / <a href="#">Vacuum Cleaners</a> / <a href="#">Air Purifiers</a> / <a href="#">CCTV Cameras</a> / <a href="#">Ceiling Fans</a> / <a href="#">Table Fans</a> / <a href="#">Exhaust Fans</a> / <a href="#">Pedestal Fans</a> / <a href="#">Ceiling Fans with 4 Blades</a> / <a href="#">Ceiling Fans with 6 Blades</a> </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<!-- mobile menu -->
<div id="mobile-menu">
  <ul>
    <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li> <a href="index-2.html">Home</a>
      <ul>
        <li><a href="index-2.html">Home Version 1</a></li>
        <li><a href="https://themesground.com/citroen-demo/home2/index.html">Home Version 2</a></li>
      </ul>
    </li>
    <li> <a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Products Grid</a> </li>
        <li> <a href="list.html">Products List</a> </li>
        <li> <a href="product_detail.html">Product Detail</a> </li>
        <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
        <li><a href="checkout.html">Checkout</a> </li>
        <li> <a href="wishlist.html">Wishlist</a> </li>
        <li> <a href="dashboard.html">Dashboard</a> </li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
        <li> <a href="about_us.html">About us</a> </li>
        <li> <a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a> </li>
        <li><a href="404error.html">404 Error Page</a> </li>
      </ul>
    </li>
    <li> <a href="#">Computers</a>
      <ul>
        <li> <a href="#" class="">Laptop</a>
          <ul>
            <li> <a href="grid.html"><span>Microsoft</span></a> </li>
            <li> <a href="grid.html"><span>Lenova</span></a> </li>
            <li> <a href="grid.html"><span>Apple</span></a> </li>
            <li> <a href="grid.html"><span>Touchscreen</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Printers</a>
          <ul>
                              <li> <a href="grid.html">Scanners</a> </li>
                              <li> <a href="grid.html">3D Printers</a> </li>
                              <li> <a href="grid.html">Fax Machines</a> </li>
                              <li> <a href="grid.html">Connectors</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Components</a>
          <ul>
                              <li> <a href="grid.html">Hard Drives</a> </li>
                              <li> <a href="grid.html">Motherboards</a> </li>
                              <li> <a href="grid.html">Graphic Cards </a> </li>
                              <li> <a href="grid.html">Processors</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Accessories</a>
          <ul>
                              <li> <a href="grid.html">Keyboards </a> </li>
                              <li> <a href="grid.html">WebCams</a> </li>
                              <li> <a href="grid.html">Batteries</a> </li>
                              <li> <a href="grid.html">Speakers</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li> <a href="grid.html">Appliances</a>
      <ul>
        <li> <a href="grid.html" class="">Kitchen</a>
          <ul class="level1">
                              <li> <a href="grid.html">Refrigerators</a> </li>
                              <li> <a href="grid.html">Dishwashers</a> </li>
                              <li> <a href="grid.html">Microwaves</a> </li>
                              <li> <a href="grid.html">Tosters</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Cameras</a>
          <ul class="level1">
                              <li> <a href="grid.html"><span>Accessories</span></a> </li>
                              <li> <a href="grid.html"><span>Binoculars</span></a> </li>
                              <li> <a href="grid.html"><span>Telescopes</span></a> </li>
                              <li> <a href="grid.html"><span>Camcorders</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Desktops</a>
          <ul class="level1">
                              <li> <a href="grid.html"><span>Routers &amp; Modems</span></a> </li>
                              <li> <a href="grid.html"><span>CPUs, Processors</span></a> </li>
                              <li> <a href="grid.html"><span>PC Gaming Store</span></a> </li>
                              <li> <a href="grid.html"><span>Components</span></a> </li>
          </ul>
        </li>
        <li> <a href="#.html">Mobile Phones</a>
          <ul class="level1">
                              <li> <a href="grid.html"><span>Apple</span></a> </li>
                              <li> <a href="grid.html"><span>Samsung</span></a> </li>
                              <li> <a href="grid.html"><span>Motorola</span></a> </li>
                              <li> <a href="grid.html"><span>Lenovo</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li> <a href="grid.html"> Televisions </a></li>
    <li> <a href="grid.html"> Cameras</a></li>
    <li><a href="grid.html"> Mobiles, Tablets</a> </li>
    <li><a href="grid.html"> Refrigerators</a> </li>
    <li><a href="grid.html"> Watches</a> </li>
  </ul>
  <div class="top-links">
    <ul class="links">
      <li><a title="My Account" href="login.html">My Account</a> </li>
      <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
      <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
      <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
      <li class="last"><a title="Login" href="login.html"><span>Login</span></a> </li>
    </ul>
  </div>
</div>
<!-- JavaScript --> 

<script src="{{ asset('assets/citroen-theme/js/routes.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/components/cart.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/render.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/main.js') }}"></script> 

<script src="{{ asset('assets/citroen-theme/js/jquery-3.2.1.min.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/bootstrap.min.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/revslider.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/common.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/owl.carousel.min.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/jquery.mobile-menu.min.js') }}"></script> 
<script src="{{ asset('assets/citroen-theme/js/countdown.js') }}"></script> 
<script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
	            startheight:510,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script> 
<!-- Hot Deals Timer 1--> 
<script>
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
</body>

<!-- Mirrored from themesground.com/citroen-demo/V1/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jul 2021 07:12:22 GMT -->
</html>
