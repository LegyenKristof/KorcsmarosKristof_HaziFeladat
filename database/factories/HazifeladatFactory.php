<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HazifeladatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "feladat" => $this->faker->word(1),
            "diak" => $this->faker->name(2),
            "url" => $this->faker->url(),
            "ertekeles" => "",
            "pontszam" => -1
        ];
    }
}
