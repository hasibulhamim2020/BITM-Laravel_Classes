@extends('master')
@section('title')
    Product List
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><h5><b>Products List Table</b></h5></div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <th>Sl. Id.</th>
                                    <th>Product Name</th>
                                    <th>Catagory</th>
                                    <th>Code</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>

                                @foreach($products as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$product->p_name}}</td>
                                    <td>{{$product->catagory ? $product->catagory->cat_name : 'not found'}}</td>
                                    <td>{{$product->p_code}}</td>
                                    <td>{{$product->p_price}}</td>
                                    <td><img src="{{asset("")}}/{{$product->p_image}}" alt="not found" style="width: 100px"height="100px"></td>
                                    <td>
                                        <a href="{{route('products.show',$product->id)}}" class="btn btn-danger">Edit</a>
                                    </td>
                                </tr>
                                @endforeach

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
