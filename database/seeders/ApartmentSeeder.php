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

        $a2 = Apartment::create([
            'title' => 'Apartman 2',
            'slug' => 'apartman-two',
            'short_description' => 'Apartman s terasom',
            'address' => 'Ivašnjak III 20',
            'city' => 'Lokva Rogoznica',
            'max_guests' => 3,
            'bedrooms' => 1,
            'bathrooms' => 1,
            'price_per_night' => 50.00,
            'is_active' => true, 
        ]);

        $a2->images()->createMany([
            ['path' => 'apartments/two/cover.jpg', 'is_cover' => true, 'sort_order' => 0, 'alt' =>'Naslovna'],
            ['path' => 'apartments/two/two1.jpg', 'is_cover' => false, 'sort_order' => 1, 'alt' =>'Soba pogled na van'],
            ['path' => 'apartments/two/two2.jpg', 'is_cover' => false, 'sort_order' => 2, 'alt' =>'Soba pogled prema WC'],
            ['path' => 'apartments/two/two3.jpg', 'is_cover' => false, 'sort_order' => 3, 'alt' =>'Soba'],
            ['path' => 'apartments/two/two4.jpg', 'is_cover' => false, 'sort_order' => 4, 'alt' =>'Soba drugi kut'],
            ['path' => 'apartments/two/two5.jpg', 'is_cover' => false, 'sort_order' => 5, 'alt' =>'Soba treći kut'],
            ['path' => 'apartments/two/two6.jpg', 'is_cover' => false, 'sort_order' => 6, 'alt' =>'WC'],
            ['path' => 'apartments/two/two7.jpg', 'is_cover' => false, 'sort_order' => 7, 'alt' =>'Kuhinja'],
        ]);

    }
}
