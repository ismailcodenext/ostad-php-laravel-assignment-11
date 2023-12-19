@extends('backend.layouts.master');

@section('contents')

<div class="row">
<div class="col-md-7">
<div class="card mt-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Product Add</h5>
        <a href="{{ route('product.all_product') }}" class="btn btn-link product_list btn-warning">Product List</a>
    </div>
    <div class="card-body">
        <form action="{{ route('product.store_product') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productadd" name="product_name">
            </div>
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="productadd" name="quantity">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="productadd" name="price">
            </div>
            <button type="submit" class="btn mt-2 btn-warning product_list">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
        {{-- toaster js link  --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
            var type = "{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                    toastr.info("{{Session::get('message')}}");
                    break;

                    case 'success':
                        toastr.success("{{Session::get('message')}}");
                        break;
                        case 'warning':
                            toastr.warning("{{Session::get('message')}}");
                            break;
                            case 'error':
                                toastr.error("{{Session::get('message')}}");
                                break;
            }
            @endif
        </script>
@endsection


