<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('product.view',[
            'products'=>Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create',[
            'catagorys'=>Catagory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        return $request;
        Product::saveProduct($request);
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        return $id;
        return view('product.edit',[
            'product'=>Product::find($id),
            'catagorys'=>Catagory::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Product::saveProduct($request,$id);
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
