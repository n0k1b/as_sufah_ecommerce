<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_21/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 07:03:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>As Sufah @yield('title')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets/porto-theme/images/icons/favicon.ico') }}">

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,600,700,800','Poppins:300,400,500,600,700' ] }
        };
        (function(d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = "{{ asset('/assets/porto-theme/vendor/webfonts/webfont.js') }}"";
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ asset('/assets/porto-theme/vendor/bootstrap/bootstrap.min.css') }}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/porto-theme/css/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('/assets/porto-theme/vendor/fontawesome/css/all.min.css') }}>
</head>
<body>
    <div class="page-wrapper">
        <header class="home header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-search">
                            <form action="#" method="get">
                                <div class="submit-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="SEARCH" required>
                                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div>
                    </div>
                    <div class="header-right">
                        <nav class="main-nav">
                            <ul class="menu">
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="#">Daily Deal</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="login.html">Login</a></li>
                            </ul>
                        </nav>
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-bag-1"></i>
                                <span class="cart-count" id="nav-cart-count_badge">2</span>
                                <span>items on bag</span>
                            </a>

                            <div class="dropdown-menu" >
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-header">
                                        <span><span id="nav-cart-count">2</span> Items</span>

                                        <a href="cart.html">View Cart</a>
                                    </div><!-- End .dropdown-cart-header -->
                                    <div class="dropdown-cart-products">
                                        {{-- Updated with javascript --}}
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">tk<span id="nav-cart-total-price">134.00</span></span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="{{ route('porto-view-cart-checkout') }}" class="btn btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div>
                </div>
            </div>
            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu">
                            <li><a href="index-2.html">Home</a></li>
                            <li>
                                <?php 
                                    $loop_index = 0 
                                    ?>
                                <a href="category.html">Categories</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row row-sm">
                                        <div class="col-lg-4">
                                            <ul class="submenu categories">
                                                @foreach($categories as $cat)
                                                    <li id="{{$cat->id}}" onmouseover="show_category_submenu(this)"><a href="{{ route('proto-view-all-products', ['cat' => $cat->id, 'sub_cat' => -1]) }}">{{ $cat->name }}</a></li>
                                                @endforeach                                               
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="submenu sub-categories">
                                                 
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 image-container">
                                            <img src="{{ asset('/assets/porto-theme/images/menu-banner-2.jpg') }}" align="Menu banner">
                                        </div>
                                    </div>
                                </div><!-- End .megamenu -->
                            </li>
                        </ul>
                    </nav>
                    <a href="{{ route('porto-home') }}" class="logo">
                        <img src="{{ asset('/image/organization_logo').'/'.$logo }}" style="height: 100px !important;  width: auto !important;" alt="Porto Logo">
                    </a>
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="">
                                <a href="product.html">Brands</a>
                                <div class="megamenu megamenu-fixed-width menu-right">
                                    <div class="row row-sm">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">All Brands</a>
                                            <ul class="submenu">
                                                @foreach ($brands as $brand)
                                                    <li><a href="product.html">{{ $brand->brand_name }}</a></li>
                                                @endforeach                                                
                                            </ul>
                                        </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu -->
                            </li>
                            <li class="sf-with-ul">
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="{{ route('porto-view-cart-checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('admin-dashboard') }}">Admin Dashboard</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#" class="login-link">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <button class="mobile-menu-toggler" type="button">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
        </header><!-- End .header -->
        <main class="home main">
            @yield('content')
        </main><!-- End .main -->
        <footer class="footer">
            {{-- <div class="instagram-box">
                <div class="owl-carousel owl-theme text-center" data-toggle="owl" data-owl-options="{
                    'loop' : true,
                    'nav': false,
                    'dots': false,
                    'margin' : 0,
                    'autoHeight': true,
                    'autoplay': true,
                    'autoplayTimeout': 5000,
                    'responsive': {
                      '0': {
                        'items': 2
                      },
                      '480': {
                        'items': 3
                      },
                      '768': {
                        'items': 5
                      },
                      '950': {
                        'items': 7
                      },
                      '1200' : {
                        'items' : 9
                      },
                      '1400': {
                        'items': 11
                      }
                    }
                }">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram1.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram2.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram3.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram4.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram5.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram1.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram6.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram7.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram8.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram9.html') }}" alt="instagram">
                    <img src="{{ asset('/assets/porto-theme/images/instagram/instagram10.html') }}" alt="instagram">
                </div>

                <div class="instagram-follow">
                    <div class="brand">
                        <h3>instagram</h3>
                        <p>@portoecommerce</p>
                    </div>
                    <i class="fab fa-instagram"></i>
                    <button class="btn btn-dark">FOLLOW</button>
                </div>
            </div> --}}
            <div class="footer-top">
                <div class="container">
                    <div class="row row-sm">
                        <div class="col-md-7">
                            <div class="widget">
                                <h3 class="widget-title">about us</h3>
                                <div class="widget-content">
                                    <p style="margin-right: 8rem;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tristique augue eget enim 
                                    feugiat blandit. Phasellus bibendum ex leo, at egestas lacus pellentesque in x leo, at 
                                    egestas lacus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="widget">
                                <h3 class="widget-title">contact info</h3>
                                <div class="widget-content ul-separate">
                                    <ul>
                                        <li class="subwidget">
                                            <h4 class="subwidget-title">address</h4>
                                            <p>123 Street Name, City, England <br> Pintrest street oklar</p>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li class="subwidget">
                                            <h4 class="subwidget-title">phone</h4>
                                            <a href="#">Toll Free (123) 456-7890</a>
                                        </li>
                                        <li class="subwidget">
                                            <h4 class="subwidget-title">Email</h4>
                                            <a href="mailto:mail@example.com">mail@example.com</a>
                                        </li>
                                    </ul>   
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle">
                <div class="container">
                    <div class="row row-sm">
                        <div class="col-md-4">
                            <div class="widget">
                                <h3 class="widget-title">my account</h3>
                                <div class="widget-content row row-sm">
                                    <div class="col-xl-6">
                                        <ul>
                                            <li><a href="about.html">About us</a></li>
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="my-account.html">My account</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-6">
                                        <ul>
                                            <li><a href="#">Orders history</a></li>
                                            <li><a href="#">Advanced search</a></li>
                                            <li><a href="login.html">Login</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="widget">
                                <h3 class="widget-title">main features</h3>
                                <div class="widget-content row row-sm">
                                    <div class="col-xl-6">
                                        <ul>
                                            <li><a href="#">Super Fast Magento Theme</a></li>
                                            <li><a href="#">1st Fully working Ajax Theme</a></li>
                                            <li><a href="#">10 Unique Homepage Layouts</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-6">
                                        <ul>
                                            <li><a href="#">Powerful Admin Panel</a></li>
                                            <li><a href="#">Mobile & Retino Optimized</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="social-icons">
                                <a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" target="_blank" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p>Porto eCommerce. © 2020 All Rights Reserved.</p>
                    <img src="{{ asset('/assets/porto-theme/images/payments_long.png') }}">
                </div>
            </div>
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-retweet"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active"><a href="index-2.html">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="category.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">Product List Item Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                            <li><a href="category-3col.html">3 Columns Products</a></li>
                            <li><a href="category.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#">Variations</a>
                                <ul>
                                    <li><a href="product.html">Horizontal Thumbnails</a></li>
                                    <li><a href="product-full-width.html">Vertical Thumbnails</a></li>
                                    <li><a href="product.html">Inner Zoom</a></li>
                                    <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                    <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                    <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                    <li><a href="product-simple.html">Simple Product</a></li>
                                    <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Product Layout Types</a>
                                <ul>
                                    <li><a href="product.html">Default Layout</a></li>
                                    <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                    <li><a href="product-full-width.html">Full Width Layout</a></li>
                                    <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                    <li><a href="product-sticky-both.html">Sticky Both Side Info</a></li>
                                    <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li>
                                <a href="#">Checkout</a>
                                <ul>
                                    <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                    <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                    <li><a href="checkout-review.html">Checkout Review</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Dashboard</a>
                                <ul>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li>
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">Blog Post</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#" class="login-link">Login</a></li>
                            <li><a href="forgot-password.html">Forgot Password</a></li>
                        </ul>
                    </li>
                    <li><a href="https://1.envato.market/DdLk5" target="_blank">Buy Porto!</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank"><i class="icon-facebook"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- newsletter-popup-form -->
    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background-image: url({{ asset('/assets/porto-theme/images/newsletter_popup_bg.jpg') }});">
        <div class="newsletter-popup-content">
            <img src="{{ asset('/assets/porto-theme/images/logo-black.png') }}" alt="Logo" class="logo-newsletter">
            <h2>BE THE FIRST TO KNOW</h2>
            <p>Subscribe to the Porto eCommerce newsletter to receive timely updates from your favorite products.</p>
            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Email address" required>
                    <input type="submit" class="btn" value="Go!">
                </div><!-- End .from-group -->
            </form>
            <div class="newsletter-subscribe">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="1">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->
    </div><!-- End .newsletter-popup -->

    <!-- Add Cart Modal -->
    <div class="modal fade" id="addCartModal" tabindex="-1" role="dialog" aria-labelledby="addCartModal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body add-cart-box text-center">
            <p>You've just added this product to the<br>cart:</p>
            <h4 id="productTitle"></h4>
            <img src="#" id="productImage" width="100" height="100" alt="adding cart image">
            <div class="btn-actions">
                <a href="cart.html"><button class="btn-primary">Go to cart page</button></a>
                <a href="#"><button class="btn-primary" data-dismiss="modal">Continue</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{ asset('/assets/porto-theme/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/assets/porto-theme/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/assets/porto-theme/vendor/isotope-docs/isotope-docs.min.js') }}"></script>
    <script src="{{ asset('/assets/porto-theme/js/plugins.min.js') }}"></script>    

    <!-- Main JS File -->
    <script src="{{ asset('/assets/porto-theme/js/routes.js') }}"></script>
    <script src="{{ asset('/assets/porto-theme/js/render.js') }}"></script>
    <script src="{{ asset('/assets/porto-theme/js/components/cart.js') }}"></script>

    <script src="{{ asset('/assets/porto-theme/js/main.min.js') }}"></script>
    <script src="{{ asset('/assets/porto-theme/js/index.js') }}"></script>

    @yield('page-script')
</body>

<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo_21/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 07:04:46 GMT -->
</html>