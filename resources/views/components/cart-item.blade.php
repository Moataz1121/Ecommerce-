<form method="post" action="{{ route('addto') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="quantatiy" value="1" min="1">
            <button type="submit">Add to Cart</button>
 </form>