<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment_id' => mt_rand(1, 100),
            'discuss_id' => mt_rand(1, 30),
            'content_id' => mt_rand(1, 100),
            'user_id' => mt_rand(1, 20),
        ];
    }
}
