<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailsReturns extends Model
{
    protected $table = 'details_returns';
    protected $primaryKey = 'details_returns_id';
    protected $fillable = [
        'return_id',
        'item_id',
        'fine_id',
        'return_condition',
        'subtotal',
    ];

    public function return()
    {
        return $this->belongsTo(Returns::class, 'return_id', 'return_id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'item_id');
    }

    public function fine()
    {
        return $this->belongsTo(Fine::class, 'fine_id', 'fine_id');
    }

    public function photo()
    {
        return $this->hasMany(ItemsPhoto::class, 'details_items_id', 'item_id');
    }
}
