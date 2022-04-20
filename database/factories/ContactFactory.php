<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from_user_id'=>5,
            'to_user_id'=>4,
            'subject'=> $this->faker->text(50),
            'message'=> $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
