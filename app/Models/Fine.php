<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    protected $table = 'fines';
    protected $primaryKey = 'fine_id';
    protected $fillable = [
        'fine_code',
        'description',
        'amount',
    ];
}
