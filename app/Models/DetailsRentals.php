<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rental;
use App\Models\Item;
use App\Models\RentalsPhoto;

class DetailsRentals extends Model
{
    protected $table = 'details_rentals';
    protected $primaryKey = 'details_rentals_id';
    protected $fillable = [
        'rental_id',
        'item_id',
        'quantity',
        'subtotal',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rental_id', 'rental_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'item_id');
    }

    public function photo()
    {
        return $this->hasMany(RentalsPhoto::class, 'details_rentals_id', 'details_rentals_id');
    }
}
