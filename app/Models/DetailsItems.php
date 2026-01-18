<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailsItems extends Model
{
    protected $table = 'details_items';
    protected $primaryKey = 'details_items_id';
    protected $fillable = [
        'item_id',
        'serial_number',
        'condition',
        'status',
        'stock',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id', 'item_id');
    }

    public function photos()
    {
        return $this->hasMany(ItemsPhoto::class, 'details_items_id', 'details_items_id');
    }
}
