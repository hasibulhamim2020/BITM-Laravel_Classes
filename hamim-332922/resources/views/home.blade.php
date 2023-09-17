@extends('master')
@section('title')
    Home
@endsection

@section('content')
    <section class="pt-4">

        <h1 class="text-center">Welcome To Product Management system of <br>
        <b>BITM e-commerce system...</b></h1>

        <h5 class="py-5">Here You can do Some operations like..</h5>
        <section>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Product</th>
                            <th>Catagory</th>
                        </tr>
                        <tr>
                            <td>
                                <ol>
                                    <li>New Product Add</li>
                                    <li>Product List Check</li>
                                    <li>Product Data Update</li>
                                </ol>
                            </td>
                            <td>
                                <ol>
                                    <li>New Catagory Add</li>
                                    <li>Catagory List Check</li>
                                </ol>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

    </section>
@endsection
