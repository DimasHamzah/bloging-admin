<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'slug' => $this->faker->slug(),
            'category_id' => $this->faker->numberBetween(1,5),
            'title' => $this->faker->word(25, true),
            'subtitle' => $this->faker->word(50, true),
            'description' => $this->faker->paragraph(),
            'images' => $this->faker->imageUrl(),
        ];
    }
}
