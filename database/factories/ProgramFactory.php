<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => strtoupper(fake()->unique()->bothify('BS??##')),
            'name' => 'BS' . fake()->words(2, true),
            'college' => fake()->sentence(12),
            'slot' => fake()->numberBetween(30, 150),
            'is_active' => true
        ];
    }
}
