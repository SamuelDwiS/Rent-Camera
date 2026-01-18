<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rentals';
    protected $primaryKey = 'rental_id';
    protected $fillable = [
        'customer_id',
        'transaction_code',
        'rental_date',
        'return_date',
        'rental_status',
        'payment_status',
        'collateral_type',
        'total_price',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    public function detailsRentals()
    {
        return $this->hasMany(DetailsRentals::class, 'rental_id', 'rental_id');
    }

    public function rentalReturn()
    {
        return $this->hasOne(Returns::class, 'rental_id', 'rental_id');
    }
}
