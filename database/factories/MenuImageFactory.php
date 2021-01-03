<?php

namespace Database\Factories;

use App\Models\MenuImage;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MenuImage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'menu_id' => Menu::all()->random()->id,
            'path' => $this->faker->imageUrl(),
            'sort_number' => $this->faker->unique()->randomNumber(2),
            'status_id' => $this->faker->randomElement([1,2,3]),
            'status_updated_at' => $this->faker->randomElement([$this->faker->dateTimeThisMonth, null]),
        ];
    }
}
