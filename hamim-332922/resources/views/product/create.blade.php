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
                           <form action="" method="post"> {{-- enctype="multipart/form-data"--}}
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Product Name</label>
                                    <input id="name" type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="department" class="form-label">Product Catagory</label>
                                    <select id="department" type="text" name="department_id" class="form-control">
                                        <option >Please Select A Catagory</option>

{{--                                        @foreach($departments as $department)--}}
{{--                                            <option value="{{$department->id}}">{{$department->name}}</option>--}}
{{--                                        @endforeach--}}

                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Product Code</label>
                                    <input id="email" type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Product Price</label>
                                    <input id="phone" type="text" name="phone" class="form-control">
                                </div>
{{--                                <div class="mb-3">--}}
{{--                                    <label for="image" class="form-label">Upload image</label>--}}
{{--                                    <input id="image" type="file" name="image" class="form-control">--}}
{{--                                </div>--}}
                                <button type="submit" class="btn btn-primary">Submit Product Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
