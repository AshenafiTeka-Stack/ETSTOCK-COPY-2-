<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salesorders extends Model
{
    protected $fillable = ['customer_id', 'order_date', 'status', 'total_amount'];

}
