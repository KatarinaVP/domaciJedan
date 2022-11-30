<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Uciteljica;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ucenica>
 */
class UcenicaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(), 
            'razred' => $this->faker->numberBetween($min = 1, $max = 8),
            'uciteljica_id' => Uciteljica::factory()
        ];
    }
}
