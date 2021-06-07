@extends('admin.layout.app')
 @section('page_css')

<link rel="stylesheet" href="{{asset('assets')}}/admin/css/single_and_multiple_image_preview.css?{{time()}}" />
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2.min.css?{{time()}}" />
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/select2_custom.css?{{time()}}" />



@endsection
 @section('content')
<div class="container-fluid">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    @if (count($errors)>0)
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-danger" >
        <ul>
            @foreach($errors->all() as $error)
                <li style="display: list-item;list-style-type:disc">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>Add Product</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('admin') }}">Home</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Purchase</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Add</a></li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-xxl-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('add-purchase')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Product</label>
                                    <select class="form-control select2"  name="product_id">
                                        <option disabled selected>Select Product</option>
                                        @foreach ($products as $data )
                                            <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label>Suppliers</label>
                                    <select class="form-control select2"  name="supplier_id">
                                        <option disabled selected>Select Supplier</option>
                                        @foreach ($suppliers as $data )
                                            <option value="{{ $data->id }}">{{ $data->supplier_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Purchase Quantity</label>
                                    <input type="number" class="form-control" name="product_quantity" placeholder="Purchase Quantity" value="{{ old('product_quantity') }}"/>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Product Unit Purchasing Price</label>
                                    <input type="number" class="form-control" name="unit_purchasing_price" placeholder="Unit Purchasing Price" value="{{ old('unit_purchasing_price') }}" />
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Discount(%)</label>
                                    <input type="number" class="form-control" name="discount" placeholder="10" value="{{ old('discount') }}" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Vat(%)</label>
                                    <input type="number" class="form-control" name="vat" placeholder="10" value="{{ old('vat') }}" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Shipping Cost</label>
                                    <input type="number" class="form-control" name="shipping_cost" placeholder="60" value="{{ old('shipping_cost') }}" />
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Purchase Note</label>
                                    <textarea class="form-control" rows="4" id="purchase_note" name="purchase_note"></textarea>
                                </div>
                            </div>










                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection @section('page_js')
<script src="{{asset('assets')}}/admin/js/single_and_multiple_image_preview.js?{{time()}}"></script>
{{-- <script src="{{asset('assets')}}/admin/js/bootstrap-select.js"></script> --}}
<script src="{{asset('assets')}}/admin/js/select2.full.js"></script>
<script src="{{asset('assets')}}/admin/js/advanced-form-element.js"></script>

<script src="{{asset('assets')}}/admin/js/admin.js?{{time()}}"></script>

@endsection