<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoundReviewPostDetail>
 */
class SoundReviewPostDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_name' => $this->faker->name(),
            'item_description' => $this->faker->text(),
            'number_of_Like' => $this->faker->numberBetween(0, 100),
        ];
    }
}
