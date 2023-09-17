@extends('master')
@section('title')
    Catagory Add
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><h5><b>Catagory Create Form</b></h5></div>
                        <div class="card-body">
                           <form action="{{route('catagorys.store')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Catagory Name</label>
                                    <input id="name" type="text" name="cat_name" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Catagory Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
