@extends('backend.layouts.master');

@section('contents')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit Product </h5>
        <a href="{{route('product.all_product')}}" class="btn btn-link product_list btn-warning">Product List</a>
    </div>
    <div class="card-body">
        <form action="{{ route('product.update_product') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $products->id }}">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" value="{{ $products->product_name }}" name="product_name">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" value="{{ $products->quantity }}" name="quantity">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" value="{{ $products->price }}" name="price">
            </div>
            <button type="submit" class="btn mt-2 btn-warning product_list">Update</button>
        </form>
    </div>
</div>



@endsection
