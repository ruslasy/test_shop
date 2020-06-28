<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller as BaseController;
use App\Models\Catalog\Group;;
use App\Models\Catalog\Product;
use App\Models\Catalog\History;

use Validator;

class Catalog extends BaseController
{
    /**
     * Display products
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts()
    {
        $products = Product::paginate(10);
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully.');
    }

    /**
     * Display categories
     *
     * @return \Illuminate\Http\Response
     */
    public function getСategories()
    {
        $groups = DB::table('catalog_group')
            ->leftJoin('catalog_product', 'catalog_product.group_id', '=', 'catalog_group.id')
            ->select('catalog_group.*', DB::raw('sum(catalog_product.quantity) as product_count'))
            ->groupBy('catalog_group.id')
            ->get();

        return $this->sendResponse($groups, 'Groups retrieved successfully.');
    }
}