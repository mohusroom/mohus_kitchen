<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MenuImage;

class MenuImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuImage::factory()
            ->times(10)
            ->create();
    }
}
