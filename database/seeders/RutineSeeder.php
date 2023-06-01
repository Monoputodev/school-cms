<?php

namespace Database\Seeders;

use App\Models\Rutine;
use Illuminate\Database\Seeder;

class RutineSeeder extends Seeder
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
            Rutine::create([
                'title' => 'Rutine ' . $i,
                'file' => 'rutine.pdf',
                'course_id' => '2',
                'status' => '1',
            ]);
        }
    }
}
