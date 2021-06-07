@extends('admin.layout.app')
@section('content')



<div class="container-fluid">
@if(Session::has('success'))
    <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-success" >

        {{Session::get('success')}}

        </div>
    @endif

    @if ($errors->any())
            <div class="col-md-10 col-sm-10 col-10 offset-md-1 offset-sm-10 alert alert-danger" >
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
     @endif
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All category</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                            <li class="breadcrumb-item active"><a href="javascript:void(0);">category List</a></li>
                        </ol>
                    </div>
                </div>

				<div class="row">

					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title"></h4>
									
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
    											<thead>
													<tr>
														<th>#</th>
														<th>Product Id</th>


														<th>Product Name</th>
														<th>Quantity</th>

                                                      
                                                       
													</tr>
												</thead>
												<tbody>

                                                    @foreach($datas as $data)
												
														<td><strong>{{$data->sl_no}}</strong></td>
														<td>{{$data->id}}</td>
														<td>{{$data->product->name}}</td>
														<td>{{$data->unit_quantity}}</td>
													
													
                                                       
													</tr>

												@endforeach


												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>

						</div>
					</div>
				</div>

            </div>

@endsection
@section('page_js')
<script>
    $("#example3").DataTable({
       ordering: false

   });
</script>
<script src="{{asset('assets')}}/admin/js/admin.js?{{time()}}"></script>
@endsection