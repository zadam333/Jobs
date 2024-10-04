<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->jobTitle,
            "location" => "remote",
            "salary" => fake()->randomElement(["$50.000","$80.000","$10.000"]),
            "schedule" => "full time",
            "featured" => false,
            "url" => fake()->url,
            "employer_id" => Employer::factory()
        ];
    }
}
