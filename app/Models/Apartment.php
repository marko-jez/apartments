<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';

    protected $fillable = [
        'title',
        'slug', 
        'short_description',
        'address',
        'city',
        'max_guests',
        'bedrooms',
        'bathrooms',
        'price_per_night',
        'is_active'
    ];

    public function images() 
    {
        return $this->hasMany(ApartmentImage::class, 'apartment_id');

    }

    public function coverImage()
    {
        return $this->hasOne(ApartmentImage::class, 'apartment_id')->where('is_cover', 1);
    }


}
