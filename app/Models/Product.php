<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $primaryKey = 'product_id';
    public $incrementing = false; // because UUID is not auto-incrementing
    protected $keyType = 'string'; // UUIDs are strings

    protected $fillable = ['product_name', 'product_sku', 'category_id', 'description', 'unit', 'cost_price', 'selling_price', 'exp_date', 'reorder_level', 'barcode_QR', 'reg_date'];
}
