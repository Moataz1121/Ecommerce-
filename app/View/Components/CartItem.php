<?php

namespace App\View\Components;

use App\Models\CartItem as ModelsCartItem;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class CartItem extends Component
{
   // public $product;
    /**
     * Create a new component instance.
     */
    public function __construct(Product $product)
    {
     //   $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
       $product =  Product::all(); 
        return view('components.cart-item' , get_defined_vars());
    }

    public function addToCart($quantatiy , Request $request) { 
        $productId = $request->input('product_id');
        $quantatiy = $request->input('quantatiy');

        // check if item is aleardy exisits in cart
        $cartItem = ModelsCartItem::where('user_id', auth()->id())
        ->where('product_id', $productId)
        ->first();

        if ($cartItem) {
            # code...
            $cartItem->quantatiy += $quantatiy;
            $cartItem->save();
        }else {
            $cartItem = new ModelsCartItem();
            $cartItem->user_id = auth()->id();
            $cartItem->product_id = $productId;
            $cartItem->quantatiy = $quantatiy;
        }
        return to_route('front.cart');
    }
}
