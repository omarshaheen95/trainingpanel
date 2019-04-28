<?php

namespace App\Models;

use App\Models\Traits\CategoryTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use CategoryTrait;

    protected $table ;

    protected $fillable = [
        'name', 'available',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = "categories";
    }
}
