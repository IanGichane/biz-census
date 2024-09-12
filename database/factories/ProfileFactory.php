<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(), // Changed to company name for realism in context
            'category' => fake()->word(), // Use word() for a more suitable category name
            'services' => fake()->words(3, true), // Generating a comma-separated list of service names
            'description' => fake()->paragraph(2), // Paragraph of text for a description

        ];
    }
}
