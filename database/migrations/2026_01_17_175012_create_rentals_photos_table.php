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
        Schema::create('rentals_photos', function (Blueprint $table) {
            $table->id('rentals_photos_id');
            $table->foreignId('details_rentals_id')->references('details_rentals_id')->on('details_rentals');
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
        Schema::dropIfExists('rentals_photos');
    }
};
