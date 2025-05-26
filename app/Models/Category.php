<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
    ];

    // 🔗 Relationship: One category has many products
    // public function products()
    // {
    //     return $this->hasMany(ProductV2::class, 'category_id');
    // }
}

