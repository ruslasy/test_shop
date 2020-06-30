<?php
namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller as BaseController;
use App\Models\Catalog\Group;;
use App\Models\Catalog\Product;
use App\Models\Catalog\History;
use PhpParser\Node\Stmt\GroupUse;
use Illuminate\Support\Facades\Validator;


class Catalog extends BaseController
{
    /**
     * Create categories
     *
     * @return \Illuminate\Http\Response
     */
    public function createGroup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:catalog_group|max:30',
            'description' => 'max:500',
        ]);

        if($validator->fails())
        {
            return $this->sendError('Validation fail.');
        }

        $group = new Group();
        $group->title = $request->title;
        $group->description = $request->description;
        $group->save();
        
        return $this->sendResponse($group, 'Group create successfully.');
    }

    /**
     * update categories
     *
     * @return \Illuminate\Http\Response
     */
    public function updateGroup(Request $request, $id)
    {
        die(var_dump($request->input('title')));
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:30',
            'description' => 'max:500',
        ]);

        if($validator->fails())
        {
            return $this->sendError('Validation fail.');
        }

        $group = Group::find((int)$id);

        if(!$group){
            return $this->sendError('Group not found.');
        }

        $group->title = $request->title;
        $group->description = $request->description;
        $group->save();
        
        return $this->sendResponse($group, 'Group update successfully.');
    }

    /**
     * delete categories
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteGroup(Request $request, $id)
    {
        $group = Group::find((int)$id);
        
        if(!$group){
            return $this->sendError('Group not found.');
        }

        if(!$group->delete())
        {
            return $this->sendError('Group delete fail.');
        }

        return $this->sendResponse($group, 'Group delete successfully.');
    }

    /**
     * Display categories
     *
     * @return \Illuminate\Http\Response
     */
    public function getGroup()
    {
        $groups = DB::table('catalog_group')
            ->leftJoin('catalog_product', 'catalog_product.group_id', '=', 'catalog_group.id')
            ->select('catalog_group.*', DB::raw('sum(catalog_product.quantity) as product_count'))
            ->groupBy('catalog_group.id')
            ->get();

        return $this->sendResponse($groups, 'Groups retrieved successfully.');
    }

    /**
     * Display products
     *
     * @return \Illuminate\Http\Response
     */
    public function getProduct()
    {
        $products = Product::paginate(10);
        return $this->sendResponse($products->toArray(), 'Products retrieved successfully.');
    }

    /**
     * Create product
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required|exists:App\Models\Catalog\Group,id',
            'title' => 'required|unique:catalog_product|min:5|max:50',
            'description' => 'max:500',
            'picture' => 'max:255',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required|integer',

        ]);

        if($validator->fails())
        {
            return $this->sendError('Validation fail.');
        }

        $product = new Product();
        $product->group_id = $request->group_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->picture = $request->picture;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();
        
        return $this->sendResponse($product, 'Product create successfully.');
    }

    /**
     * Update product
     *
     * @return \Illuminate\Http\Response
     */
    public function updateProduct(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'group_id' => 'required|exists:App\Models\Catalog\Group,id',
            'title' => 'required|min:5|max:50',
            'description' => 'max:500',
            'picture' => 'max:255',
            'price' => 'required|numeric|gt:0',
            'quantity' => 'required|integer',

        ]);

        if($validator->fails())
        {
            return $this->sendError('Validation fail.');
        }

        $product = Product::find($id);

        if(!$product){
            return $this->sendError('Product not found.');
        }
        $historu = new History();
        $historu->product_id = $product->id;
        $historu->quantity = $product->quantity;
        $historu->quantity_old = $request->quantity;
        $historu->save();

        $product->group_id = $request->group_id;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->picture = $request->picture;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return $this->sendResponse($product, 'Product update successfully.');
    }
    
    /**
     * Product categories
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct(Request $request, $id)
    {
        $product = Product::find((int)$id);
        
        if(!$product){
            return $this->sendError('Product not found.');
        }

        if(!$product->delete())
        {
            return $this->sendError('Product delete fail.');
        }

        return $this->sendResponse($product, 'Product delete successfully.');
    }

    /**
     * Product show
     *
     * @return \Illuminate\Http\Response
     */
    public function showProduct(Request $request, $id)
    {
        $product = Product::find((int)$id);

        if(!$product){
            return $this->sendError('Product not found.');
        }
        $product->history;
        return $this->sendResponse($product, 'Product show successfully.');
    }
}