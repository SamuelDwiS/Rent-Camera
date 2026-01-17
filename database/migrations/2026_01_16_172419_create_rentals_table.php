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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id('rental_id');
            $table->foreignId('customer_id')->references('customer_id')->on('customers')->onDelete('cascade');
            $table->string('transaction_code')->unique();
            $table->date('rental_date');
            $table->date('return_date');
            $table->enum('rental_status', ['booked', 'ongoing', 'returned', 'cancelled'])->change();
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->change();
            $table->string('collateral_type');
            $table->decimal('total_price', 12, 2);
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
