<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\Category;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => Category::all()->random()->id,
            'genre_id' => Genre::all()->random()->id,
            'name' => $this->faker->name,
            'description' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'sort_number' => $this->faker->unique()->randomNumber(2),
            'status_id' => $this->faker->randomElement([1,2,3]),
            'status_updated_at' => $this->faker->randomElement([$this->faker->dateTimeThisMonth, null]),
        ];
    }
}
