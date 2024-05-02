<?php

namespace App\Http\Controllers;

use App\Models\Featuer;
use App\Http\Requests\StoreFeatuerRequest;
use App\Http\Requests\UpdateFeatuerRequest;

class FeatuerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Featuer::paginate(1);
        return view('admin.featuers.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.featuers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFeatuerRequest $request)
    {
        //dd('sssssssss');
        $data = $request->validated();
        Featuer::create($data);
        return to_route('admin.featuers.create')->with('created' , 'You Create Your Featuer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Featuer $featuer)
    {
        return view('admin.featuers.show', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Featuer $featuer)
    {
        return view('admin.featuers.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFeatuerRequest $request, Featuer $featuer)
    {
        $data = $request->validated();
        $featuer->update($data);
        return to_route('admin.featuers.index')->with('updated' , 'You Make Update Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Featuer $featuer)
    {
       //dd('sss');
        $featuer->delete();
        return to_route('admin.featuers.index')->with('delete', 'You Delete This Item Successfuly');
    }
}
