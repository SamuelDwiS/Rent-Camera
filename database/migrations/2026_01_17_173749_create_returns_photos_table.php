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
        Schema::create('returns_photos', function (Blueprint $table) {
            $table->id('returns_photos_id');
            $table->foreignId('details_returns_id')->references('details_returns_id')->on('details_returns');
            $table->string('photo_path');
            $table->enum('photo_type', ['front', 'back', 'side']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returns_photos');
    }
};
