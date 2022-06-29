<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setlist>
 */
class SetlistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nome da Musica' => $this->faker->name(),
            'Interprete' => $this->faker->name(),
            'Link' => 'https://www.youtube.com/watch?v=fPO76Jlnz6c&list=RDfPO76Jlnz6c&start_radio=1',
            'Seleção'=> true,
        ];
    }
}
