<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Http\Requests\StoreLetterRequest;
use App\Http\Requests\UpdateLetterRequest;
use Illuminate\Support\Facades\Storage;

class LetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Letter::paginate(1);
        return view('admin.letters.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.letters.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLetterRequest $request)
    {
       // dd($request->all());

       $data = $request->validated();

       $imgae = $request->imgae;
       $newImageName = time() . '-' . $imgae->getClientOriginalName();
       $imgae->storeAs('letter' , $newImageName , 'public');
       $data['imgae'] = $newImageName;
       Letter::create($data);
       return to_route('admin.letter.index')->with('created' , 'You Create Your Featuer');

    }

    /**
     * Display the specified resource.
     */
    public function show(Letter $letter)
    {
        return view('admin.letters.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Letter $letter)
    {
        return view('admin.letters.edit' , get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLetterRequest $request, Letter $letter)
    {
        //dd($request->all());
        $data = $request->validated();
        if ($request->hasFile('imgae')) {
            # code...
            Storage::delete("public/letter/$letter->imgae");
            $imgae = $request->imgae;
            $newImageName = time() . '-' . $imgae->getClientOriginalName();
            $imgae->storeAs('letter' , $newImageName , 'public');
            $data['imgae'] = $newImageName;
        }
        $letter->update($data);
       return to_route('admin.letter.index')->with('updated' , 'You update Your Item');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Letter $letter)
    {
        $letter->delete();
        return to_route('admin.letter.index')->with('delete', 'You Delete This Item Successfuly');

    }
}
