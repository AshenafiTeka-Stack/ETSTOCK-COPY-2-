<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->string('product_sku');
            $table->string('category_id');
            $table->text('description');
            $table->string('unit');
            $table->decimal('cost_price');
            $table->decimal('selling_price');
            $table->date('exp_date');
            $table->integer('reorder_level');
            $table->string('barcode_QR');
            $table->date('reg_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
