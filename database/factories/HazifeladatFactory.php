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
            "url" => $this->faker->url(),
            "ertekeles" => $this->faker->text(100),
            "pontszam" => $this->faker->numberBetween(0, 100)
        ];
    }
}
