<?php

namespace App\Http\Controllers;

use App\Models\Best;
use App\Http\Requests\StoreBestRequest;
use App\Http\Requests\UpdateBestRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Best::paginate(1);
        return view('admin.bests.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.bests.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBestRequest $request)
    {
        //
        $data = $request->validated();

        // how to controll the image :)
        //first get the image
        $imgae = $request->imgae;
        //Change the name of the imgae
        $newimgaeName = time() . '-' . $imgae->getClientOriginalName();
 
        //dd($newimgaeName);
        $imgae->storeAs('best' , $newimgaeName , 'public');
        $data['imgae'] = $newimgaeName;
 
        Best::create($data);
 
        return to_route('admin.best.index')->with('created' , 'You Create Your Featuer');
     }

    /**
     * Display the specified resource.
     */
    public function show(Best $best)
    {
        return view('admin.bests.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Best $best)
    {
        $categories = Category::all();
        return view('admin.bests.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBestRequest $request, Best $best)
    {
        //
        $data = $request->validated();

        if ($request->hasFile('imgae')) {
            # code...
            Storage::delete("public/products/$best->imgae");
            $imgae = $request->imgae;
            $newimgaeName = time() . '-' . $imgae->getClientOriginalName();
            $imgae->storeAs('best' , $newimgaeName , 'public');
            $data['imgae'] = $newimgaeName;
        }
        $best->update($data);
        return to_route('admin.best.index')->with('updated' , 'You Make Update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Best $best)
    {

        $best->delete();
        return to_route('admin.best.index')->with('delete', 'You Delete This Item Successfuly');    }
}
