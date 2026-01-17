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
        Schema::create('details_returns', function (Blueprint $table) {
            $table->id('details_returns_id');
            $table->foreignId('return_id')->references('return_id')->on('returns');
            $table->foreignId('item_id')->references('item_id')->on('items');
            $table->foreignId('fine_id')->references('fine_id')->on('fines')->nullable();
            $table->enum('return_condition', ['good', 'damaged', 'lost']);
            $table->decimal('subtotal', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_returns');
    }
};
