@extends('backend.layouts.master')

@section('contents')
    <div class="row">
        <div class="col-md-7">
            <div class="card mt-5">
                <div class="card-header bg-dark">
                    <h4> Sales</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('sales.store_sales') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="product_id">Select Product</label>
                            <select name="product_id" id="sales" class="form-control" required>
                                @foreach ($productsData as $productData)
                                    <option  value="{{ $productData->id }}">{{ $productData->product_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" id="sales" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-warning product_list mt-2">Sale Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
