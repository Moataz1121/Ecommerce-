<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\StoreMonialRequest;
use App\Models\Best;
use App\Models\CartItem;
use App\Models\Contact;
use App\Models\Featuer;
use App\Models\Letter;
use App\Models\Moataz;
use App\Models\Product;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index() { 
       // $featuers = Featuer::all();
        $products = Product::all();
        //$freshs = Product::latest()->take(5)->get();
        //$bests = Best::all();
       // $skills = Moataz::all();
        //$letters = Letter::all();
        return view('front.index' , get_defined_vars());
    }

    public function contacts(StoreContactRequest $request){
        //dd($request->all());
        $data = $request->validated();
        Subscriber::create($data);
        return to_route('front.index')->with('created' , 'You Send Subscribe Successfuly');
    }


    public function subscriber(StoreMonialRequest $request)
    {
       // dd($request->all());
       $data = $request->validated();
       Contact::create($data);
       return to_route('front.contact')->with('created' , 'Your Feedback Sent Successfuly');
    }

    public function cart() { 
        $carts = CartItem::with('product')->get();
        return view('front.cart' , get_defined_vars());
    }
}
