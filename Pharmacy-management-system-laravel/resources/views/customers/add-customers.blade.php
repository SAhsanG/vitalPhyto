@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
@endpush

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">


			<!-- Add Medicine -->
			<form method="post" enctype="multipart/form-data" id="update_service" action="{{route('customers.store')}}">
				@csrf
				<div class="service-fields mb-3">
					<div class="row">

						<div class="col-lg-4">
							<div class="form-group">
								<label>Customer Name <span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="customer_name" value="{{old('customer_name')}}">
							</div>
						</div>
                        <div class="col-lg-4">
							<div class="form-group">
								<label>Customer Address <span class="text-danger">*</span></label>
								<input class="form-control" type="text" name="customer_address" value="{{old('customer_address')}}">
							</div>
						</div>
                        <div>
                            <div class="form-group">

                                <button class="btn btn-primary submit-btn mt-4" type="submit" name="form_submit" value="submit">Submit</button>

                            </div>
                        </div>
					</div>
				</div>


			</form>
			<!-- /Add Medicine -->


			</div>
		</div>
	</div>
</div>
@endsection


@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body custom-edit-service">


			<!-- Add Medicine -->
			<h1>Helo</h1>
			<!-- /Add Medicine -->


			</div>
		</div>
	</div>
</div>
@endsection

@push('page-js')
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush

