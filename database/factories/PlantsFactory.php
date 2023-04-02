<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plants>
 */
class PlantsFactory extends Factory
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
            'genus' => $this->faker->words(1, true),
            'species' => $this->faker->words(1, true),
            'common_name' => $this->faker->name(2),
            'difficulty' => $this->faker->randomElement(['Easy', 'Medium', 'Hard']),
            'light' => $this->faker->randomElement(['Low', 'Medium', 'High']),
            'temp' => $this->faker->randomElement(['20°C', '21°C', '22°C', '23°C', '24°C', '25°C', '26°C', '27°C', '28°C', '29°C', '30°C', '31°C', '32°C', '33°C', '34°C', '35°C', '36°C', '37°C', '38°C', '39°C', '40°C']),
            'usage' => $this->faker->randomElement(['Foreground', 'Midground', 'Background']),
            'excerpt' => $this->faker->text(500),
            'body' => $this->faker->text(800),
        ];
    }
}
