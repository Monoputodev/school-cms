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
        for ($i = 1; $i <= 20; $i++) {
            Notice::create([
                'title' => 'Notice ' . $i,
                'pdf_file' => 'file.pdf',
                'status' => '1',
            ]);
        }
    }
}
