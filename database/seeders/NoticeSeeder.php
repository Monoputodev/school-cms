<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notices = [
            [
                'title' => 'Result 23-24 Session',
                'subtitle' => NULL,
                'pdf_file' => 'the-bd-school-multidisiplinary-1.png',
                'type' => 1,
                'status' => 1,
                'created_at' => '2023-05-24 22:54:43',
                'updated_at' => '2023-05-24 22:54:43',
            ],
            [
                'title' => 'Result Under Graduate Programme',
                'subtitle' => NULL,
                'pdf_file' => 'download (3).jpg',
                'type' => 2,
                'status' => 1,
                'created_at' => '2023-05-24 22:55:13',
                'updated_at' => '2023-05-24 22:55:13',
            ],
        ];

        foreach ($notices as $notice) {
            Notice::create($notice);
        }
    }
}
