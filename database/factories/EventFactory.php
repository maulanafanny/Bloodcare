<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'date' => $this->faker->dateTimeThisYear('+1 months'),
            'location' => 'Kota ' . $this->faker->word(),
            'provider' => 'PMI Indonesia',
            'image' => 'img/bloodcare.jpg'
        ];
    }
}
