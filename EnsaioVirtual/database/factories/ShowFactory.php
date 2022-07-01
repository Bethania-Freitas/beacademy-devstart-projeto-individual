<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ShowFactory extends Factory
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
            'Local' =>$this->faker->streetAddress(),
            'Cidade' => $this->faker->city(),
            'Formato' => $this->faker->name(),
            'Cachê' => 100,
        ];
    }
}
