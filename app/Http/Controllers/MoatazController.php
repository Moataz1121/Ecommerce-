<?php

namespace App\Http\Controllers;

use App\Models\Moataz;
use App\Http\Requests\StoreMoatazRequest;
use App\Http\Requests\UpdateMoatazRequest;

class MoatazController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Moataz::paginate(1);
        return view('admin.moataz.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.moataz.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMoatazRequest $request)
    {
        //dd($request->all());
        $data = $request->validated();
        Moataz::create($data);
        return to_route('admin.moataz.index')->with('created' , 'You Create Your Featuer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Moataz $moataz)
    {
        return view('admin.moataz.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Moataz $moataz)
    {
        return view('admin.moataz.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMoatazRequest $request, Moataz $moataz)
    {
       // dd($request->all());
       $data = $request->validated();
       $moataz->update($data);
       return to_route('admin.moataz.index')->with('updated' , 'You Update Your Skill');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Moataz $moataz)
    {
        $moataz->delete();
        return to_route('admin.moataz.index')->with('delete', 'You Delete This Item Successfuly');

    }
}
