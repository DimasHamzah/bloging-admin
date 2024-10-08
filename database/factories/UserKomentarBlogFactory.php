<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserKomentarBlog>
 */
class UserKomentarBlogFactory extends Factory
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
            'blog_id' => $this->faker->numberBetween(1,5),
            'commentar' => $this->faker->sentence(),
            'images' => $this->faker->imageUrl()
        ];
    }
}
