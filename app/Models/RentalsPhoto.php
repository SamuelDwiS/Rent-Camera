<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalsPhoto extends Model
{
    protected $table = 'rentals_photos';
    protected $primaryKey = 'rentals_photo_id';
    protected $fillable = [
        'details_rentals_id',
        'photo_type',
        'photo_path',
    ];  

    public function detailsRentals()
    {
        return $this->belongsTo(DetailsRentals::class, 'details_rentals_id', 'details_rentals_id');
    }
}
