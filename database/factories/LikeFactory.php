<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(1, 21),
            'discuss_id' => mt_rand(1, 30),
            'comment_id' => mt_rand(1, 100),
        ];
    }
}
