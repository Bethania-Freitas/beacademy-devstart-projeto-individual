<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RehearsalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Data' => $this->faker->date(),
            'Hora' => $this->faker->date(),
            'Local' => $this->faker->streetAddress(),
            'Custo' => 100
        ];
    }
}
