<?php

namespace Database\Seeders;

use App\Models\Result;
use Illuminate\Database\Seeder;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create 10 rutines
        for ($i = 1; $i <= 20; $i++) {
            Result::create([
                'title' => 'Result ' . $i,
                'file' => 'result.pdf',
                'course_id' => '1',
                'status' => '1',
            ]);
        }
    }
}
