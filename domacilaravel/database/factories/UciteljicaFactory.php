<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Skola;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Uciteljica>
 */
class UciteljicaFactory extends Factory
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
            'maticni_broj' => $this->faker->randomNumber($nbDigits = 8, $strict = false),
            'skola_id' => Skola::factory()
        ];
    }
}
