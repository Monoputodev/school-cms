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
        $courses = [
            [
                'name' => 'Masters Programme',
                'image' => 'demo.jpg',
                'details' => 'what is details',
                'description' => 'A master\'s degree is a graduate degree that allows...',
                'status' => 1,
                'created_at' => '2023-05-27 10:21:07',
                'updated_at' => '2023-05-27 10:21:07',
            ],
            [
                'name' => 'Under Graduate Proggramme',
                'image' => 'demo.jpg',
                'details' => 'what is details',
                'description' => 'A master\'s degree is a graduate degree that allows...',
                'status' => 1,
                'created_at' => '2023-05-27 10:21:24',
                'updated_at' => '2023-05-27 10:21:24',
            ],
        ];

        foreach ($courses as $course) {
            Courses::create($course);
        }
    }
}
