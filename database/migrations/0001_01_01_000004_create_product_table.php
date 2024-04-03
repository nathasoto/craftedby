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
        Schema::create('product', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->float('price')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('stock')->nullable();
            $table->string('material')->nullable();
            $table->text('history_anécdota')->nullable();
            $table->string('image_path')->nullable();
            $table->text("description",300);
            $table->foreignUuid('category_id')->constrained('category');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
