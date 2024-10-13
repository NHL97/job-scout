<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->randomElement(['10k', '20k', '30k', '40k', '50k', '60k', '70k', '80k', '90k', '100k']),
            'location' => $this->faker->city(),
            'url' => $this->faker->url(),
            'featured' => $this->faker->boolean(),
            'employer_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
