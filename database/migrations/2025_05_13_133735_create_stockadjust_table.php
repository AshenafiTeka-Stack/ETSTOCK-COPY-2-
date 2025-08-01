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
        Schema::create('stockadjusts', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('product_id');
            $table->string('warehouse_id');
            $table->string('adjustment_type');
            $table->string('quantity');
            $table->string('reason');
            $table->string('adjusted_by');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockadjusts');
    }
};
