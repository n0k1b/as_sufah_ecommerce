@extends('themes.porto.layout.app')

@section('title')
    | Product Name
@endsection

@section('page-css')
    <style>
        .number-input {
    display: flex;
    align-items: center;
    border: 1px solid #dddddd;
    border-radius: 2px;
    justify-content: space-between;
}
.product-col .product-image-container{
    max-width: 90px !important;
}
.quantity{
    width:40px !important;
    height: 30px !important;
}
.btn{
    min-width: 15px !important;
    padding:4px !important;
}
.btn i{
    font-size: 10px !important;
}
.number-input input[type="number"] {
    text-align: center;
    max-width: 50px;
    font-size: 13px;
    color: #222;
    flex-grow: 1;
}
.number-input button {
    background-color: #f7f7f7;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    padding: 8px;
}
    </style>
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
            <div class="cart-table-container" >
                <table class="table table-cart">
                    <thead>
                        <tr>
                            <th class="product-col">Product</th>
                            <th class="price-col">Price</th>
                            <th class="qty-col">Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody id="cart_all">



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



                <table class="table table-totals" id="cart_total">

                </table>

                <div class="checkout-methods">

                    <a href="{{ route("porto-view-cart-checkout") }}" class="btn btn-block btn-sm btn-primary">Go to Checkout</a>

                </div><!-- End .checkout-methods -->
            </div><!-- End .cart-summary -->
        </div><!-- End .col-lg-4 -->
    </div><!-- End .row -->
</div>
@endsection
@section('page-script')
<script src="{{asset('assets')}}/frontend/js/cart_all.js?{{ time() }}"></script>
@endsection
