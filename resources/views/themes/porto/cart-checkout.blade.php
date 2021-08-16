@extends('themes.porto.layout.app')
@section('page-css')
{{-- <link rel="stylesheet" href="{{asset('assets')}}/frontend/fonts/Linearicons/Font/demo-files/demo.css"> --}}
<style>
    .btn-remove{
    color: #f8f9fa !important;
    cursor: pointer !important;
}
.radio-label{
    padding:5px;
}
.form-check-input
{
    margin-top:8px !important;
}

.btn{
    min-width: 15px !important;
    padding-left: 5px !important;
    padding-right: 5px !important;
    padding-top: 3px !important;
    padding-bottom: 3px !important;
    /* margin-top: -6px; */
    margin-bottom: 5px;

}
.btn i{
    font-size: 12px !important;
}
.checkout-steps li form
{
    max-width: 700px !important;
}

    </style>
@endsection
@section('content')
    <main class="main">

        <div class="modal fade" id="edit_address" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                        <div class="modal-header">
                            <h3 class="modal-title" id="addressModalLabel">Shipping Address</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div><!-- End .modal-header -->

                        <div class="modal-body">
                                <div class="form-group required-field">
                                    <label>Address Type </label>
                                    <input type="text" class="form-control form-control-sm" id="edit_address_type" placeholder="Home/Office" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label>Area</label>
                                    <div class="select-custom">
                                        <select class="form-control form-control-sm"  id="edit_area_id">
                                            @foreach ( $areas as $data )
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                    @endforeach
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div>

                                <div class="form-group required-field">
                                    <label>Full Address</label>
                                    <input type="text" class="form-control form-control-sm" id="edit_address_name" required>

                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>Phone Number </label>
                                    <div class="form-control-tooltip">
                                        <input type="tel" class="form-control form-control-sm" id="edit_contact_no" required>
                                        <input type="hidden" id="hidden_id">
                                        <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                    </div><!-- End .form-control-tooltip -->
                                </div>



                                <!-- End .form-group -->





                               <!-- End .form-group -->


                        </div><!-- End .modal-body -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="edit_address()">Save changes</button>
                        </div><!-- End .modal-footer -->

                </div><!-- End .modal-content -->
            </div><!-- End .modal-dialog -->
        </div>

        <div class="modal fade" id="add_address" tabindex="-1" role="dialog" aria-labelledby="addressModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                        <div class="modal-header">
                            <h3 class="modal-title" id="addressModalLabel">Shipping Address</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div><!-- End .modal-header -->

                        <div class="modal-body">
                                <div class="form-group required-field">
                                    <label>Address Type </label>
                                    <input type="text" class="form-control form-control-sm" id="address_type" placeholder="Home/Office" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label>Area</label>
                                    <div class="select-custom">
                                        <select class="form-control form-control-sm"  id="area_id">
                                            @foreach ( $areas as $data )
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                    @endforeach
                                        </select>
                                    </div><!-- End .select-custom -->
                                </div>

                                <div class="form-group required-field">
                                    <label>Full Address</label>
                                    <input type="text" class="form-control form-control-sm" id="address" required>

                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label>Phone Number </label>
                                    <div class="form-control-tooltip">
                                        <input type="tel" class="form-control form-control-sm" id="contact_no" required>
                                        <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                    </div><!-- End .form-control-tooltip -->
                                </div>



                                <!-- End .form-group -->





                               <!-- End .form-group -->


                        </div><!-- End .modal-body -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-sm" onclick="add_address()">Save changes</button>
                        </div><!-- End .modal-footer -->

                </div><!-- End .modal-content -->
            </div><!-- End .modal-dialog -->
        </div>
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div><!-- End .container -->
        </nav>

        <div class="container">
            @if (count($errors)>0)
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-danger mt-4" style="background: #dd0505;
    border-color: #dd0505;font-weight:bold">
        <ul>
            @foreach($errors->all() as $error)
                <li style="display: list-item;list-style-type:disc;font-size: 15px;color:white;font-weight:bold">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="row">
                <div class="col-lg-8">
                    <ul class="checkout-steps">
                        <li>


                            <form action="{{ route('place_order') }}" method="POST">
                                @csrf


                                <div style="background:#FBFCFC;padding:12px" >
                                <button type="button" class="btn btn-primary" onclick="show_address_modal()">Add New Address</button>

                                <div id="address_list">


                                </div>
                                </div>



                        </li>


                    </ul>
                </div><!-- End .col-lg-8 -->

                <div class="col-lg-4">
                    <div class="order-summary">
                        <h3>Summary</h3>



                        <div  id="order-cart-section">
                            <table class="table table-mini-cart">
                                <tbody>
                                    @foreach (session()->get('cart') as $item)
                                    <tr>
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{ asset($item['image']) }}" alt="product">
                                                </a>
                                            </figure>
                                            <div>
                                                <h2 class="product-title">
                                                    <a href="product.html">{{ $item['name'] }}</a>
                                                </h2>

                                                <span class="product-qty">Qty: {{ $item['quantity'] }}</span>
                                            </div>
                                        </td>
                                        <td class="price-col">Tk{{ $item['price'] }}</td>
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
                </div><!-- End .col-lg-4 -->
            </div><!-- End .row -->

            <div class="row">
                <div class="col-lg-8">
                    <div class="checkout-steps-action">
                        <button type="submit" class="btn btn-primary float-right" style="width: 100%">Place Order</button>
                    </form>
                    </div><!-- End .checkout-steps-action -->
                </div><!-- End .col-lg-8 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="mb-6"></div><!-- margin -->
    </main>
@endsection
@section('page-script')
<script src="{{asset('assets')}}/frontend/js/checkout.js?{{ time() }}"></script>
@endsection
