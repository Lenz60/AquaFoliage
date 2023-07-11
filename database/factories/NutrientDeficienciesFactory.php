<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NutrientDeficienciesFactory extends Factory
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
            'difficulty' => $this->faker->randomElement(['Easy', 'Medium', 'Hard']),
            'causes' => $this->faker->randomElement(['Lack of potassium', 'Lack of Nitrogen', 'Too much light', 'Low Co2','Adaption']),
            'excerpt' => $this->faker->text(500),
            'causes_desc' => $this->faker->text(500),
            'body' => $this->faker->text(800),
        ];
    }
}
