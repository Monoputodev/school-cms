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
        Notice::create([
            'title' => 'Notice 1',
            'subtitle' => 'Subtitle 1',
            'pdf_file' => 'notice1.pdf',
            'status' => 1,
            'ranking' => 1,
        ]);

        Notice::create([
            'title' => 'Notice 2',
            'subtitle' => 'Subtitle 2',
            'pdf_file' => 'notice2.pdf',
            'status' => 1,
            'ranking' => 2,
        ]);

        Notice::create([
            'title' => 'Notice 3',
            'subtitle' => 'Subtitle 3',
            'pdf_file' => 'notice3.pdf',
            'status' => 0,
            'ranking' => 3,
        ]);
    }
}
