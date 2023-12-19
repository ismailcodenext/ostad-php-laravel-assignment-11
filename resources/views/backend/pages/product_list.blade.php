@extends('backend.layouts.master');
@section('contents')
    <div class="row">
        <div class="col-md-9">
            <div class="card mt-4">
                <div class="card-header  d-flex justify-content-between align-items-center">
                    <h4> Product List</h4>
                    <a href="{{ route('sales.store_sales') }}" class="btn btn-link product_list btn-warning">sales Product</a>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Product Name</th>
                                <th>Quentity</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($productsData as $productData)
                                <tr>
                                    <td>{{ $productData->id }}</td>
                                    <td>{{ $productData->product_name }}</td>
                                    <td>{{ $productData->quantity }}</td>
                                    <td>{{ $productData->price }}</td>
                                    <td>
                                        <a href="{{route('product.edit_product',$productData->id)}}" class="btn btn-success btn-sm">Edit</a>
    
                                        <a href="{{route('product.delete_product',$productData->id)}}" class="btn btn-danger btn-sm"">Delete</a>
                                    </td>
                                </tr>
                              
                                @endforeach
                            </tbody>
                        

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
