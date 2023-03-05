<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        image::create([
            'name' => 'Profil',
            'url' => '/asset/image/user',
            'description' =>
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, in!',
            'imageable_id' => 1,
            'imageable_type' => 'App\Model\User',
        ]);
    }
}
