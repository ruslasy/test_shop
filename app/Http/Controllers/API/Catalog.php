<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;
use App\Models\Catalog\Group;;
use App\Models\Catalog\Product;
use App\Models\Catalog\History;

use Validator;

class Catalog extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts()
    {
        $products = Product::paginate(10);
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully.');
    }
}