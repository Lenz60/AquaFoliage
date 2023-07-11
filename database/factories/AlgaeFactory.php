<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AlgaeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(2, true),
            'species' => $this->faker->words(1, true),
            'common_name' => $this->faker->name(2),
            'difficulty' => $this->faker->randomElement(['Easy', 'Medium', 'Hard']),
            'causes' => $this->faker->randomElement(['Too much light', 'Silicate', 'Nutrient imbalance', 'Low Co2']),
            'excerpt' => $this->faker->text(500),
            'causes_desc' => $this->faker->text(500),
            'body' => $this->faker->text(800),
        ];
    }
}
