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
        Schema::create('salesorders', function (Blueprint $table) {
            $table->id();

            $table->string('customer_id');
            $table->string('order_date');
            $table->string('status');
            $table->string('total_amount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salesorders');
    }
};
