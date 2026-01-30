<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApartmentImage extends Model
{
    protected $table = 'apartment_images';
    
    protected $fillable = [
        'apartment_id',
        'path',
        'alt',
        'sort_order',
        'is_cover'
    ];

    public function apartment()
    {
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }
}
