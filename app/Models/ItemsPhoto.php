<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemsPhoto extends Model
{
    protected $table = 'items_photos';
    protected $primaryKey = 'items_photo_id';
    protected $fillable = [
        'details_items_id',
        'photo_path',
    ];  

    public function detailsItems()
    {
        return $this->belongsTo(DetailsItems::class, 'details_items_id', 'details_items_id');
    }
}
