<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CategoryTableSeeder::class);
        $this->call(GenreTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(MenuImageTableSeeder::class);
        $this->call(RecipeTableSeeder::class);
    }
}
