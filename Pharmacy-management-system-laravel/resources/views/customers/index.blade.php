@extends('layouts.app')

@push('page-css')
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
@endpush

@push('page-header')
    <div class="col-sm-12">
        <h3 class="page-title">Products</h3>
        <ul class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Add Product</li> --}}
        </ul>
    </div>
@endpush


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body custom-edit-service">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>

                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($customers as $customer)


                            <tr>
                            <th scope="row">{{$customer->customer_name}}</th>
                            <td>{{$customer->customer_address}}</td>

                            <td>
                                <div class="actions">
                                    <a class="btn btn-sm bg-success-light" >
                                        <i class="fe fe-pencil"></i> Edit
                                    </a>
                                    <a data-id="{{$customer->id}}" href="javascript:void(0);" class="btn btn-sm bg-danger-light deletebtn" data-toggle="modal">
                                        <i class="fe fe-trash"></i> Delete
                                    </a>
                                </div></td>
                            {{-- <td>Otto</td>
                            <td>@mdo</td> --}}
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-js')
    <!-- Select2 JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
@endpush
