@extends('themes.porto.layout.app')
@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <ul class="checkout-progress-bar">

            @if($status == 'pending')
            <li class="active">
                <span>Pending</span>
            </li>
            <li >
                <span>Confirmed</span>
            </li>
            <li>
                <span>Picked</span>
            </li>

            <li>
                <span>Delivered</span>
            </li>
            @elseif($status == 'confirmed')
            <li class="active">
                <span>Pending</span>
            </li>
            <li class="active" >
                <span>Confirmed</span>
            </li>
            <li>
                <span>Picked</span>
            </li>

            <li>
                <span>Delivered</span>
            </li>
            @elseif($status == 'picked')
            <li class="active">
                <span>Pending</span>
            </li>
            <li class="active">
                <span>Confirmed</span>
            </li>
            <li class="active">
                <span>Picked</span>
            </li>

            <li>
                <span>Delivered</span>
            </li>


            @elseif($status == 'delivered')
            <li class="active">
                <span>Pending</span>
            </li>
            <li class="active" >
                <span>Confirmed</span>
            </li>
            <li class="active">
                <span>Picked</span>
            </li>

            <li class="active">
                <span>Delivered</span>
            </li>
            @endif





        </ul>
        <div class="row">
            <div class="col-lg-8">
                <ul class="checkout-steps">
                    <li>
                        <h2 class="step-title">Order Details</h2>

                        <div class="shipping-step-addresses shadow p-3 mb-5 bg-white rounded">
                            <div class="shipping-address-box" style="width: 100%" >
                                <h4>Order No:<span style="font-weight:400">#{{ $order_no }}</span></h4><br>
                                <h4>Order Date:<span style="font-weight:400"> {{ $order_date }}</span></h4><br>
                                <h4>Deliver Address:<span style="font-weight:400"> {{ $delivery_address }}</span></h4><br>

                            </div><!-- End .shipping-address-box -->
                            <!-- End .shipping-address-box -->
                        </div><!-- End .shipping-step-addresses -->

                    </li>


                </ul>
            </div><!-- End .col-lg-8 -->
            <div class="col-lg-4">
                <div class="order-summary">
                    <h3>Summary</h3>



                    <div  id="order-cart-section">
                        <table class="table table-mini-cart">
                            <tbody>
                                @foreach ($order_detail as $data)
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="#" class="product-image">
                                                <img src="{{ $data->product->thumbnail_image }}" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="product.html">{{ $data->product->name }}</a>
                                            </h2>

                                            <span class="product-qty">Qty: {{ $data->unit_quantity }}</span>
                                        </div>
                                    </td>
                                    <td class="price-col">Tk{{ $data->price*$data->count }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td>Subtotal</td>
                                    <td>TK {{ $sub_total }}</td>
                                </tr>

                                <tr>
                                    <td>Delivery Charge</td>
                                    <td>TK {{ $delivery_charge }}</td>
                                </tr>




                            </tbody>
                            <tfoot>
                                <tr>
                                    <td><b>Order Total</b></td>
                                    <td style="font-weight:bolder"><b>TK {{ $total }}</b></td>
                                </tr>


                                {{-- <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/product2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="product.html">Brown Food Recipent</a>
                                            </h2>

                                            <span class="product-qty">Qty: 4</span>
                                        </div>
                                    </td>
                                    <td class="price-col">$7.90</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->
            </div>
       <!-- End .col-lg-4 -->
        </div><!-- End .row -->

      <!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-6"></div><!-- margin -->
</main>
@endsection
