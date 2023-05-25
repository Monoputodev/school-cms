<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hero::create([
            'title' => 'Dubai Tour',
            'subtitle' => 'Discover the beauty of Dubai',
            'image' => '1.jpg'
        ]);
        Hero::create([
            'title' => 'Quatar Tour',
            'subtitle' => 'Discover the beauty of Quatar',
            'image' => '2.jpg'
        ]);
    }
}
