@extends('backend.layouts.master');
@section('contents')
    <div class="row">
        <div class="col-md-9">
            <div class="card mt-4">
                <div class="card-header">
                    <h4> Sales Transaction List:</h4>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Product id</th>
                                <th>Product Name</th>
                                <th>Quentity</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                            <tbody>
                                @foreach ($sales_data as $key => $sale_data)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $sale_data->product_id }}</td>
                                    <td>{{ $sale_data->product_name }}</td>
                                    <td>{{ $sale_data->quantity }}</td>
                                    <td>{{ $sale_data->total_price }}</td>
                                    <td>
                                        <a href="{{route('dashbord.delete_transaction',$sale_data->id)}}" class="btn btn-danger btn-sm""><i class="fa-solid fa-trash"></i></a>
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
