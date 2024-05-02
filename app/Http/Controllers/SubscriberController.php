<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Subscriber::paginate(1);
        return view('admin.subscriber.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
   

    /**
     * Store a newly created resource in storage.
     */
    

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        return view('admin.subscriber.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
 

    /**
     * Update the specified resource in storage.
     */
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        
        $subscriber->delete();
        return to_route('admin.subscriber.index')->with('delete', 'You Delete This Subscribe Successfuly');
    }
}
