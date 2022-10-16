<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\professores>
 */
class ProfessoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'RP' => $this->faker->numerify('########'),
            'Nome' => $this->faker->firstName($gender = null),
            'Sobrenome' => $this->faker->lastName(),
            'Materia' => $this->faker->word(),
        ];
    }
}
