<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
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
            'content_id' => mt_rand(1, 100),
            'discuss_id' => mt_rand(1, 30),
        ];
    }
}
