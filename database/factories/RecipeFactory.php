<?php

namespace Database\Factories;

use App\Models\Recipe;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'menu_id' => Menu::all()->random()->id,
            'content' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
        ];
    }
}
