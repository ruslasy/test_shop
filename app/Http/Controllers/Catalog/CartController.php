<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Catalog\Product;

class CartController extends Controller
{
    /**
     * Show main page catalog.
     *
     * @return View
     */
    
    public function default()
    {
        
    }

    public function count()
    {
        $cart = session()->get('cart.items') ?? [];
        return Response()->json(['count' => count($cart)]);
    }

    public function toggle($id)
    {
        $product = Product::find($id);

        if(!$product)
        {
            return Response()->json(['message' => 'Product not found'], 404);
        }

        $cart = session()->get('cart.items') ?? [];
        
        if (in_array($id, $cart)) {

            unset($cart[array_search($id, $cart)]);
        }else{
            $cart[] = $product->id;
        }

        session()->put('cart.items', $cart);

        return Response()->json(['count' => count($cart)]);
    }
    
}