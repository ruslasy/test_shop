<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'catalog_product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'picture', 'price', 'quantity',
    ];

    public function inCart()
	{
        $cart = session()->get('cart.items') ?? [];
        
        if (in_array($this->id, $cart)){
            return true;
        }

        return false;
    }

    public function getPicture()
    {
        if(file_exists(public_path().$this->picture)){
            return $this->picture;
        }
        return '/bg.jpg';
    }

    /**
     * Get the history for product.
     */
    public function history()
    {
        return $this->hasMany('App\Models\Catalog\History', 'product_id', 'id');
    }
}
