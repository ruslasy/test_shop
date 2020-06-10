<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;

class CatalogController extends Controller
{
    /**
     * Show main page catalog.
     *
     * @return View
     */
    
    public function default()
    {
        $products = Product::all();
        
        return view('catalog.default', ['products' => $products]);
    }
}