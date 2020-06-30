<?php

namespace App\Http\Controllers\Catalog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Catalog\Product;

class CatalogController extends Controller
{
    /**
     * Show main page catalog.
     *
     * @return View
     */
    
    public function default(Request $request)
    {
        $sort = ['title', 'price'];
        $sortName = 'title';
        $sortOrder = 'asc';

        if(isset($request->sort) && isset($request->order)){
            $sortName = in_array($request->sort, $sort) ? $request->sort : $sortName;
            $sortOrder = $request->order ? 'desc' : 'asc';
        }

        $products = Product::orderBy($sortName, $sortOrder)->paginate(10);
        
        if(isset($request->sort) && isset($request->order)){
            $products->appends(['sort' => $sortName]);
            $products->appends(['order' => $request->order]);
        }

        return view('catalog.default', ['products' => $products, 'links' => $products , 
            'sortOrder' => (int)!$request->order, 'sortName' => $sortName]);
    }

    public function product(Request $request, $id)
    {
        $product = Product::find((int)$id);

        return view('catalog.product', ['product' => $product]);
    }
}