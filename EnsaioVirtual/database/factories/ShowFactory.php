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
            'data' => $this->faker->date(),
            'local' =>$this->faker->streetAddress(),
            'cidade' => $this->faker->city(),
            'Formato' => $this->faker->name(),
            'Nome Contratante' => $this->faker->name(),
            'Cachê' => 100,
        ];
    }
}
