<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            HeroSeeder::class,
            ContentSeeder::class,
            BlogSeeder::class,
            NoticeSeeder::class,
            ResultSeeder::class,
            RutineSeeder::class,
            CoursesSeeder::class,
            TeamSeeder::class,
            TypeSeeder::class,
        ]);
    }
}
