<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Contact::paginate(1);
        return view('admin.contact.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
  

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('admin.contact.show' , get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return to_route('admin.contact.index')->with('delete', 'You Delete This Message Successfuly');    
    }
}
