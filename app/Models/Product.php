<?php

namespace App\Models;

use App\Models\Traits\ProductTrait;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ProductTrait;

    protected $table = "products";

    protected $fillable = [
        'name', 'price', 'quantity', 'available',
    ];
}
