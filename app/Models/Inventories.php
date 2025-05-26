<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventories extends Model
{
    protected $fillable = ['product_id', 'warehouse_id', 'quantity', 'last_updated'];

}
