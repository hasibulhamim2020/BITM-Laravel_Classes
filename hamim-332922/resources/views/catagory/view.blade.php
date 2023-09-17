@extends('master')
@section('title')
    Catagorys List
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header"><h5><b>Catagory's List Table</b></h5></div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <th>Sl. Id.</th>
                                    <th>Catagory Name</th>
                                </tr>

                                @foreach($catagorys as $catagory)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$catagory->cat_name}}</td>
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
