<?php
/**
 * Created by PhpStorm.
 * User: Dev Omar Shaheen
 * Date: 4/27/2019
 * Time: 12:29 AM
 */

namespace App\Models\Traits;


use App\Models\Product;

trait CategoryTrait
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}