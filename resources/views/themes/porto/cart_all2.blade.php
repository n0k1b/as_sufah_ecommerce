@extends('themes.porto.layout.app')
@section('title')
    | Product Name
@endsection
@section('content')
<nav aria-label="breadcrumb" class="breadcrumb-nav mb-4">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
        </ol>
    </div>
</nav>

<div class="container">
    <div class="row">


        <div class="col-lg-8">
            <div class="cart-table-container" id="cart_all">
                <table class="table table-cart">
                    <thead>
                        <tr>
                            <th class="product-col">Product</th>
                            <th class="price-col">Price</th>
                            <th class="qty-col">Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="product-row">
                            <td class="product-col">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="assets/images/products/product1.jpg" alt="product">
                                    </a>
                                </figure>
                                <h2 class="product-title">
                                    <a href="product.html">Black Chair Top</a>
                                </h2>
                            </td>
                            <td>$17.90</td>
                            <td>
                                <input class="vertical-quantity form-control" type="text">
                            </td>
                            <td>$17.90</td>
                        </tr>
                        <tr class="product-action-row">
                            <td colspan="4" class="clearfix">
                                <div class="float-left">
                                    <a href="#" class="btn-move">Move to Wishlist</a>
                                </div><!-- End .float-left -->

                                <div class="float-right">
                                    <a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                                    <a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
                                </div><!-- End .float-right -->
                            </td>
                        </tr>



                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="4" class="clearfix">
                                <div class="float-left">
                                    <a href="category.html" class="btn btn-outline-secondary">Continue Shopping</a>
                                </div><!-- End .float-left -->

                                <div class="float-right">
                                    <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
                                    <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a>
                                </div><!-- End .float-right -->
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- End .cart-table-container -->

            <div class="cart-discount">
                <h4>Apply Discount Code</h4>
                <form action="#">
                    <div class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                        </div>
                    </div><!-- End .input-group -->
                </form>
            </div><!-- End .cart-discount -->
        </div><!-- End .col-lg-8 -->

        <div class="col-lg-4">
            <div class="cart-summary">
                <h3>Summary</h3>

                <h4>
                    <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                </h4>



                <table class="table table-totals"  id="cart_total">
                    <tbody>
                        <tr>
                            <td>Subtotal</td>
                            <td>$17.90</td>
                        </tr>

                        <tr>
                            <td>Tax</td>
                            <td>$0.00</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Order Total</td>
                            <td>$17.90</td>
                        </tr>
                    </tfoot>
                </table>

                <div class="checkout-methods">
                    <a href="checkout-shipping.html" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>

                </div><!-- End .checkout-methods -->
            </div><!-- End .cart-summary -->
        </div><!-- End .col-lg-4 -->
    </div><!-- End .row -->
</div>
@endsection
