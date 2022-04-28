<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 5)),
            'picture' => $this->faker->imageUrl(640, 480, 'space', true),
            'body' => $this->faker->paragraph(mt_rand(10, 50)),
            'excerpt' => $this->faker->paragraph(mt_rand(5, 10)),
            'slug' => $this->faker->slug(),
            'category' => 'Planet',
        ];
    }
}
