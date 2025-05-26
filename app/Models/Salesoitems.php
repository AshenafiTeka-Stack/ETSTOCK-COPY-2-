<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salesoitems extends Model
{
    protected $fillable = ['so_id', 'product_id', 'quantity', 'unit_price'];
}
