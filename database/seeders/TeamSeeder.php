<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = [
            [
                'name' => 'MD Asaduzzaman',
                'designation' => 'Dean, CSE',
                'status' => 1,
                'ranking' => 1,
                'image' => '1685015244.jpg',
                'created_at' => '2023-05-24 22:47:25',
                'updated_at' => '2023-05-24 22:47:25',
            ],
            [
                'name' => 'Obaidul Kader',
                'designation' => 'Dean, Political Science',
                'status' => 1,
                'ranking' => 2,
                'image' => '1685015297.jpg',
                'created_at' => '2023-05-24 22:48:17',
                'updated_at' => '2023-05-24 22:48:17',
            ],
            [
                'name' => 'Dr. Dipu Moni',
                'designation' => 'Dean, Medical Science',
                'status' => 1,
                'ranking' => 3,
                'image' => '1685015391.jpg',
                'created_at' => '2023-05-24 22:49:51',
                'updated_at' => '2023-05-24 22:49:51',
            ],
            [
                'name' => 'Mohibul Islam Chawdhury',
                'designation' => 'Dean, Law',
                'status' => 1,
                'ranking' => 4,
                'image' => '1685015449.jpg',
                'created_at' => '2023-05-24 22:50:49',
                'updated_at' => '2023-05-24 22:50:49',
            ],
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
