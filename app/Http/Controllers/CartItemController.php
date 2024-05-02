<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addToCart(Request $request ) {
        $productId = $request->input('product_id');
        $quantatiy = $request->input('quantatiy');

        $cartItem = CartItem::where('user_id' , auth()->id())->where('product_id' , $productId)->first();
        
        if ($cartItem) {
            # code...
            $cartItem->quantatiy += $quantatiy;
            $cartItem->save();
        }else
        {
            $cartItem = new CartItem;
            $cartItem->user_id = auth()->id();
            $cartItem->product_id = $productId;
            $cartItem->quantatiy = $quantatiy;
            $cartItem->save();
        }    

        return to_route('front.index');

    }
   
}
