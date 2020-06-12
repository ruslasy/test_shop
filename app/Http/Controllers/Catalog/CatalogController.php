<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class CatalogController extends Controller
{
    /**
     * Show main page catalog.
     *
     * @return View
     */
    
    public function default(Request $request)
    {
        $sort_name = 'name';
        $sort_type = 'asc';
        $sortPrice = 0;
        $sortName = 0;

        if(isset($request->price)){
            $sort_name = 'price';
            $sort_type = ((bool)$request->price)? 'desc' : 'asc';
            $sortPrice = (bool)$request->price;
        }

        if(isset($request->name)){
            $sort_name = 'name';
            $sort_type = ((bool)$request->name)? 'desc' : 'asc';
            $sortName = (bool)$request->name;
        }

        $products = Product::orderBy($sort_name, $sort_type)->paginate(10);
        
        if($sortPrice)
            $products->appends(['price' => $sortPrice]);
        if($sortName)
            $products->appends(['name' => $sortName]);

        return view('catalog.default', ['products' => $products, 'links' => $products , 'sortPrice' => (int)!$sortPrice, 'sortName' => (int)!$sortName]);
    }

    public function product(Request $request, $id)
    {
        $product = Product::find((int)$id);

        return view('catalog.product', ['product' => $product]);
    }
}