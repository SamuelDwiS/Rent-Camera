<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    protected $table = 'returns';
    protected $primaryKey = 'return_id';
    protected $fillable = [
        'rental_id',
        'return_code',
        'return_date',
        'fine_amount',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rental_id', 'rental_id');
    }

    public function detailsReturns()
    {
        return $this->hasMany(DetailsReturns::class, 'return_id', 'return_id');
    }
}
