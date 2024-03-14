<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Proyecto ' . $this->faker->text($maxNBChars = 10),
            'descripcion' => fake()->sentence(20),
            'creador_id' => fake()->numberBetween(1, 10),
            'participante_id' => fake()->numberBetween(1, 10),
        ];
    }
}
