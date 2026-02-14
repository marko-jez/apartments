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

        $a3 = Apartment::create([
            'title' => 'Apartman 3',
            'slug' => 'apartman-three',
            'short_description' => 'Apartman s pogledom na more',
            'address' => 'Ivašnjak III 20',
            'city' => 'Lokva Rogoznica',
            'max_guests' => 4,
            'bedrooms' => 2,
            'bathrooms' => 1,
            'price_per_night' => 70.00,
            'is_active' => true,
        ]);

        $a3->images()->createMany([
            ['path' => 'apartments/three/cover.jpg', 'is_cover' => true, 'sort_order' => 0, 'alt' => 'Naslovna'],
            ['path' => 'apartments/three/three1.jpg', 'is_cover' => false, 'sort_order' => 1, 'alt' => 'Dnevni boravak'],
            ['path' => 'apartments/three/three2.jpg', 'is_cover' => false, 'sort_order' => 2, 'alt' => 'Spavaća soba'],
            ['path' => 'apartments/three/three3.jpg', 'is_cover' => false, 'sort_order' => 3, 'alt' => 'Kuhinja'],
            ['path' => 'apartments/three/three4.jpg', 'is_cover' => false, 'sort_order' => 4, 'alt' => 'Kupaonica'],
            ['path' => 'apartments/three/three5.jpg', 'is_cover' => false, 'sort_order' => 5, 'alt' => 'Balkon'],
        ]);

        $a4 = Apartment::create([
            'title' => 'Apartman 4',
            'slug' => 'apartman-four',
            'short_description' => 'Moderan apartman s balkonom',
            'address' => 'Ivašnjak III 20',
            'city' => 'Lokva Rogoznica',
            'max_guests' => 4,
            'bedrooms' => 2,
            'bathrooms' => 1,
            'price_per_night' => 75.00,
            'is_active' => true,
        ]);

        $a4->images()->createMany([
            ['path' => 'apartments/four/cover.jpg', 'is_cover' => true, 'sort_order' => 0, 'alt' => 'Naslovna'],
            ['path' => 'apartments/four/four1.jpg', 'is_cover' => false, 'sort_order' => 1, 'alt' => 'Dnevni boravak'],
            ['path' => 'apartments/four/four2.jpg', 'is_cover' => false, 'sort_order' => 2, 'alt' => 'Spavaća soba'],
            ['path' => 'apartments/four/four3.jpg', 'is_cover' => false, 'sort_order' => 3, 'alt' => 'Kuhinja'],
            ['path' => 'apartments/four/four4.jpg', 'is_cover' => false, 'sort_order' => 4, 'alt' => 'Kupaonica'],
            ['path' => 'apartments/four/four5.jpg', 'is_cover' => false, 'sort_order' => 5, 'alt' => 'Balkon'],
        ]);

        $a5 = Apartment::create([
            'title' => 'Apartman 5',
            'slug' => 'apartman-five',
            'short_description' => 'Prostrani obiteljski apartman',
            'address' => 'Ivašnjak III 20',
            'city' => 'Lokva Rogoznica',
            'max_guests' => 6,
            'bedrooms' => 3,
            'bathrooms' => 2,
            'price_per_night' => 90.00,
            'is_active' => true,
        ]);

        $a5->images()->createMany([
            ['path' => 'apartments/five/cover.jpg', 'is_cover' => true, 'sort_order' => 0, 'alt' => 'Naslovna'],
            ['path' => 'apartments/five/five1.jpg', 'is_cover' => false, 'sort_order' => 1, 'alt' => 'Dnevni boravak'],
            ['path' => 'apartments/five/five2.jpg', 'is_cover' => false, 'sort_order' => 2, 'alt' => 'Blagovaonica'],
            ['path' => 'apartments/five/five3.jpg', 'is_cover' => false, 'sort_order' => 3, 'alt' => 'Kuhinja'],
            ['path' => 'apartments/five/five4.jpg', 'is_cover' => false, 'sort_order' => 4, 'alt' => 'Spavaća soba 1'],
            ['path' => 'apartments/five/five5.jpg', 'is_cover' => false, 'sort_order' => 5, 'alt' => 'Spavaća soba 2'],
            ['path' => 'apartments/five/five6.jpg', 'is_cover' => false, 'sort_order' => 6, 'alt' => 'Spavaća soba 3'],
            ['path' => 'apartments/five/five7.jpg', 'is_cover' => false, 'sort_order' => 7, 'alt' => 'Kupaonica'],
            ['path' => 'apartments/five/five8.jpg', 'is_cover' => false, 'sort_order' => 8, 'alt' => 'Terasa'],
        ]);

        $a6 = Apartment::create([
            'title' => 'Apartman 6',
            'slug' => 'apartman-six',
            'short_description' => 'Apartman s panoramskim pogledom',
            'address' => 'Ivašnjak III 20',
            'city' => 'Lokva Rogoznica',
            'max_guests' => 5,
            'bedrooms' => 2,
            'bathrooms' => 1,
            'price_per_night' => 95.00,
            'is_active' => true,
        ]);

        $a6->images()->createMany([
            ['path' => 'apartments/six/cover.jpg', 'is_cover' => true, 'sort_order' => 0, 'alt' => 'Naslovna'],
            ['path' => 'apartments/six/six1.jpg', 'is_cover' => false, 'sort_order' => 1, 'alt' => 'Dnevni boravak'],
            ['path' => 'apartments/six/six2.jpg', 'is_cover' => false, 'sort_order' => 2, 'alt' => 'Spavaća soba'],
            ['path' => 'apartments/six/six3.jpg', 'is_cover' => false, 'sort_order' => 3, 'alt' => 'Kuhinja'],
            ['path' => 'apartments/six/six4.jpg', 'is_cover' => false, 'sort_order' => 4, 'alt' => 'Kupaonica'],
            ['path' => 'apartments/six/six5.jpg', 'is_cover' => false, 'sort_order' => 5, 'alt' => 'Terasa'],
            ['path' => 'apartments/six/six6.jpg', 'is_cover' => false, 'sort_order' => 6, 'alt' => 'Pogled na more'],
            ['path' => 'apartments/six/six7.jpg', 'is_cover' => false, 'sort_order' => 7, 'alt' => 'Eksterijer'],
        ]);

    }
}
