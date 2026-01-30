<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $a1 = Apartment::create([
            'title' => 'Apartman 1',
            'slug' => 'apartman-one',
            'short_description' => 'Apartman s terasom',
            'address' => 'Ivašnjak III 20',
            'city' => 'Lokva Rogoznica',
            'max_guests' => 2,
            'bedrooms' => 1,
            'bathrooms' => 1,
            'price_per_night' => 50.00,
            'is_active' => true, 
        ]);

        $a1->images()->createMany([
            ['path' => 'apartments/one/cover.jpg', 'is_cover' => true, 'sort_order' => 0, 'alt' =>'Naslovna'],
            ['path' => 'apartments/one/one1.jpg', 'is_cover' => false, 'sort_order' => 1, 'alt' =>'Kuhinja pogled van'],
            ['path' => 'apartments/one/one2.jpg', 'is_cover' => false, 'sort_order' => 2, 'alt' =>'Kuhinja'],
            ['path' => 'apartments/one/one3.jpg', 'is_cover' => false, 'sort_order' => 3, 'alt' =>'Kuhinja i WC'],
            ['path' => 'apartments/one/one4.jpg', 'is_cover' => false, 'sort_order' => 4, 'alt' =>'Krevet'],
        ]);

    }
}
