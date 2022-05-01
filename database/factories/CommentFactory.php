<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
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
            'discuss_id' => mt_rand(1, 30),
            'body' => $this->faker->paragraph(10, 20),
            'likes' => mt_rand(10, 100),
            'dislikes' => mt_rand(10, 100),
        ];
    }
}
