<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->unsignedInteger('quantity')->between(1, 10);// siempre valores positivos
            $table->decimal('unit_price', 10, 2);
            $table->string('available_colors');
            $table->string('available_sizes');
            $table->foreignUuId('orders_id')->constrained('orders')->onDelete('cascade');
            $table->foreignUuId('products_id')->constrained('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
