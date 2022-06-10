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
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'excerpt' => $this->faker->paragraph(mt_rand(5, 10)),
            'slug' => $this->faker->unique()->slug(),
            'category' => collect(['Planet','Benda Langit Lain','Istilah Angkasa'])->random(),
            'trivia' => $this->faker->paragraph(mt_rand(5, 10)),
        ];
    }
}
