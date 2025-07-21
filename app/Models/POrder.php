<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class POrder extends Model
{
    protected $table = 'porders';
    protected $fillable = ['supplier_id', 'order_date', 'status', 'total_amount'];

}
