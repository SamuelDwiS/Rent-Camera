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
        Schema::create('items', function (Blueprint $table) {
            $table->id('item_id');
            $table->foreignId('brand_id')->references('brand_id')->on('brands')->onDelete('cascade');
            $table->foreignId('category_id')->references('category_id')->on('categories')->onDelete('cascade');
            $table->string('item_code')->unique();
            $table->string('item_name');
            $table->string('spesification');
            $table->decimal('price_per_day', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
