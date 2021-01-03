<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::factory()
            ->times(10)
            ->create();
    }
}
