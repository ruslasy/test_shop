<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'catalog_group';

    public static function groupsPoductCount()
    {
        $groups = \Illuminate\Support\Facades\DB::table($this->table)
            ->leftJoin('catalog_product', 'catalog_product.group_id', '=', 'catalog_group.id')
            ->select('catalog_group.*', 'sum(catalog_product.quantity)')
            ->get();
    }
}
