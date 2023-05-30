<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    public function run()
    {
        // Create some sample photos
        $photos = [
            [
                'title' => 'Hajj Packages',
                'image' => 'hajj.jpg',
                'ranking' => 1,
            ],
            [
                'title' => 'Umrah Packages',
                'image' => 'umrah.jpg',
                'ranking' => 2,
            ],
            [
                'title' => 'Ziyarat Packages',
                'image' => 'ziyarat.jpg',
                'ranking' => 3,
            ],
        ];

        // Insert the photos into the database
        Photo::insert($photos);
    }
}
