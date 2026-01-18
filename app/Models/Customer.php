<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rental;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'address',
        'date_of_birth',
        'phone_number',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class, 'customer_id', 'customer_id');
    }
}
