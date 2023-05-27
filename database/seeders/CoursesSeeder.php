<?php

namespace Database\Seeders;

use App\Models\Courses;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Courses::create([
            'name' => 'Diploma in CSE',
            'description' => 'Course description for Diploma in CSE',
            'status' => 1,
        ]);

        Courses::create([
            'name' => 'Diploma in Mechanical',
            'description' => 'Course description for Diploma in Mechanical',
            'status' => 1,
        ]);
    }
}
