<?php

namespace Database\Factories;

use \App\Models\SoundReviewPost;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoundReviewPost>
 */
class SoundReviewPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = SoundReviewPost::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
        ];
    }
}
