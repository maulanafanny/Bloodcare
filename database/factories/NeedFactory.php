<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NeedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'blood' => $this->faker->randomElement(['A', 'B', 'O', 'AB']),
            'hospital' => 'RS ' . $this->faker->words(2, true),
            'city' => $this->faker->word() . ', ' . $this->faker->words(2, true),
            'contact' => $this->faker->numerify('08##########'),
            'type' => $this->faker->randomElement(['Whole Blood (Donor Darah Biasa)', 
                                                   'Apheresis', 
                                                   'Plasma Konvalesen (Penyintas COVID-19)']),
            'quantity' => $this->faker->numberBetween(1, 30),
            'date' => $this->faker->dateTimeThisYear('-1 months')
        ];
    }
}
