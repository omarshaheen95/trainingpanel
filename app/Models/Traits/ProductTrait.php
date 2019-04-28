<?php
/**
 * Created by PhpStorm.
 * User: Dev Omar Shaheen
 * Date: 4/27/2019
 * Time: 12:30 AM
 */

namespace App\Models\Traits;


use App\Models\Category;

trait ProductTrait
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}