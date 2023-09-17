@extends('master')
@section('title')
    Product Edit
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><h5><b>Product Edit Form</b></h5></div>
                        <div class="card-body">
                            <form action="{{route('products.update',$product->id)}}" method="post"> {{-- enctype="multipart/form-data"--}}
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input value="{{$product->p_name}}" id="name" type="text" name="p_name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="department" class="form-label">Product Catagory</label>
                                    <select id="department" type="text" name="catagory_id" class="form-control">
                                        @foreach($catagorys as $catagory)
                                            <option value="{{$catagory->id}}" {{($catagory->id == $product->catagory_id)? 'selected':''}}>{{$catagory->cat_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Product Code</label>
                                    <input value="{{$product->p_code}}" id="email" type="text" name="p_code" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Product Price</label>
                                    <input value="{{$product->p_price}}" id="phone" type="text" name="p_price" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload image</label><br>
                                    <img src="{{asset("")}}/{{$product->p_image}}" alt="" style="width: 150px"height="150px"><br><br>
                                    <input id="image" type="file" name="p_image" class="form-control"></div>
                                <button type="submit" class="btn btn-primary">Submit Product Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
