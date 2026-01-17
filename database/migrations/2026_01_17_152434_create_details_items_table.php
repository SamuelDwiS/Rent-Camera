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
        Schema::create('details_items', function (Blueprint $table) {
            $table->id('details_items_id');
            $table->foreignId('item_id')->references('item_id')->on('items');
            $table->string('serial_number')->unique();
            $table->string('condition');
            $table->string('status');
            $table->int('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_items');
    }
};
