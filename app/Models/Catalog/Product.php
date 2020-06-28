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
    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'picture', 'price', 'availability',
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
}
