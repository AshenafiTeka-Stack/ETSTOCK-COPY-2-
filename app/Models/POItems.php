<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class POItems extends Model
{
    protected $table = 'poitems';
    protected $fillable = ['po_id', 'product_id', 'quantity', 'unit_price'];

}
