@extends('master')
@section('title')
    Product Add
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><h5><b>Product Create Form</b></h5></div>
                        <div class="card-body">
                           <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data"> {{-- --}}
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input id="name" type="text" name="p_name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="department" class="form-label">Product Catagory</label>
                                    <select id="department" type="text" name="catagory_id" class="form-control">
                                        <option >Please Select A Catagory</option>

                                        @foreach($catagorys as $catagory)
                                            <option value="{{$catagory->id}}">{{$catagory->cat_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Product Code</label>
                                    <input id="email" type="text" name="p_code" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Product Price</label>
                                    <input id="phone" type="text" name="p_price" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Upload image</label>
                                    <input id="image" type="file" name="p_image" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Product Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
