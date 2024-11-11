<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> $this->faker->title(),
            'body'=>$this->faker->paragraph(),
            'published_at'=> random_int(0,2) ? $this->faker->dateTimeBetween("-1 month","+1 month") : null,


        ];
    }
}