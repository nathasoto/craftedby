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
        Schema::create('product__order', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->integer('quantity')->nullable();
            $table->float('Total')->nullable();
            $table->string('available_colors')->nullable();
            $table->string('tamaños_disponibles')->nullable();
            $table->foreignUuid('product_id')->constrained('product');
            $table->foreignUuid('order_id')->constrained('order')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product__order');
    }
};
