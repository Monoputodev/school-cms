<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = [
            'website_name' => 'Purbachol Technical Institute',
            'website_description' => 'Best technical school in Purbachal',
            'website_logo' => '1685016592.png',
            'website_favicon' => '1685016455.png',
            'website_email' => 'info@thesawari.com',
            'website_phone' => '+880 1776 666 661',
            'website_address' => 'House: 2, Road: 4, Block: E Section-12, Mirpur, P...',
            'about_content' => 'Vision
            Contemporary sustainable technical vocational Education and Training, Human Resource Development, Employment, Changing life style. Industrial expansion and national economic grouth.

            Mission
            Execute the principals and action of works to ensure the standardized Diploma Engineering Educational and basic trade course Training.',
            'about_image' => '1685015565.png',
            'created_at' => '2023-05-24 22:02:48',
            'updated_at' => '2023-05-24 23:09:52',
        ];

        Content::create($content);
    }
}
