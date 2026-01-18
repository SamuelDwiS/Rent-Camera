<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\DetailsRental;
use App\Models\Brand;
use App\Models\Category;    

class Item extends Model
{
    protected $table = 'items';
    protected $primaryKey = 'item_id';
    protected $fillable = [
        'brand_id',
        'category_id',
        'item_code',
        'item_name',
        'spesification',
        'price_per_day',
    ];

    public function detailsRentals()
    {
        return $this->hasMany(DetailsRentals::class, 'item_id', 'item_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'brand_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }

    public function detailsItems()
    {
        return $this->hasMany(DetailsItems::class, 'item_id', 'item_id');
    }
}
