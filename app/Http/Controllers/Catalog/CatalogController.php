<?php

namespace App\Http\Controllers\Catalog;

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
        //$products = Product::all();
        $products = Product::paginate(10);

        return view('catalog.default', ['products' => $products]);
    }
}