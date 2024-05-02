<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::paginate(1);
        return view('admin.products.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        //dd($request->all());
       $data = $request->validated();

       // how to controll the image :)
       //first get the image
       $imgae = $request->imgae;
       //Change the name of the imgae
       $newimgaeName = time() . '-' . $imgae->getClientOriginalName();

       //dd($newimgaeName);
       $imgae->storeAs('products' , $newimgaeName , 'public');
       $data['imgae'] = $newimgaeName;

       Product::create($data);

       return to_route('admin.products.index')->with('created' , 'You Create Your Featuer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.products.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->validated();

        if ($request->hasFile('imgae')) {
            # code...
            Storage::delete("public/products/$product->imgae");
            $imgae = $request->imgae;
            $newimgaeName = time() . '-' . $imgae->getClientOriginalName();
            $imgae->storeAs('products' , $newimgaeName , 'public');
            $data['imgae'] = $newimgaeName;
        }
        $product->update($data);
        return to_route('admin.products.index')->with('updated' , 'You Make Update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return to_route('admin.products.index')->with('delete', 'You Delete This Item Successfuly');
    }
}
