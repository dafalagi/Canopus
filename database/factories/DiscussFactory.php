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
            'user_id' => mt_rand(1, 20),
            'title' => $this->faker->sentence(mt_rand(2, 10)),
            'body' => collect($this->faker->paragraphs(mt_rand(10, 20)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'excerpt' => $this->faker->paragraph(5, 10),
            'slug' => $this->faker->unique()->slug(),
            'likes' => mt_rand(10, 100),
            'dislikes' => mt_rand(10, 100),
        ];
    }
}
