<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DiscussFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 10),
            'title' => $this->faker->sentence(mt_rand(2, 10)),
            'body' => $this->faker->paragraph(mt_rand(10, 50)),
            'excerpt' => $this->faker->paragraph(5, 10),
            'slug' => $this->faker->unique()->slug(),
        ];
    }
}
