<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Rutine', 'status' => 1],
            ['name' => 'Result', 'status' => 1],

        ];

        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
