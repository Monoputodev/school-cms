<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $blogs = [
            [
                'title' => 'Teacher Leadership at a National Level',
                'subtitle' => 'Teacher Leadership at a National Level',
                'description' => '<p style="margin-right: 0px; margin-bottom: 16px; ...',
                'status' => 1,
                'image' => '1685014762.png',
                'created_at' => '2023-05-24 22:39:23',
                'updated_at' => '2023-05-24 22:39:23',
            ],
            [
                'title' => '4 Ways to Flex Your Leadership From The Classroom',
                'subtitle' => 'Did you know there are ways to lead while still ke...',
                'description' => '<p><span style="color: rgb(52, 60, 71); font-famil...',
                'status' => 1,
                'image' => '1685014805.png',
                'created_at' => '2023-05-24 22:40:05',
                'updated_at' => '2023-05-24 22:40:05',
            ],
            [
                'title' => 'Second Chances: Education and Justice Involved Stu...',
                'subtitle' => 'On the first work day of April, during which we ce...',
                'description' => '<p><span style="color: rgb(52, 60, 71); font-famil...',
                'status' => 1,
                'image' => '1685014861.png',
                'created_at' => '2023-05-24 22:41:02',
                'updated_at' => '2023-05-24 22:41:02',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}
