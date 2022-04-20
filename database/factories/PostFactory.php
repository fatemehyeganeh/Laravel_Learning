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
    public function definition()
    {
        return [
            'user_id'=>5,
            'title'=> $this->faker->text(50),
            'slug'=> $this->faker->slug(),
            'body'=> $this->faker->realText($maxNbChars = 200, $indexSize = 2),

        ];
    }
}
