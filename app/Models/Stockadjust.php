<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stockadjust extends Model
{
    protected $fillable = ['product_id', 'warehouse_id', 'adjustment_type', 'quantity', 'reason', 'adjusted_by'];

}
