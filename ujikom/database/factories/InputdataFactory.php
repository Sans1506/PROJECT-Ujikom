<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InputdataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->randomDigitNotNull(),
            'lokasi' => $this->faker->city(),
            'suhu'=> $this->faker->numberBetween(34,38),
            'tanggal' => $this->faker->date(),
            'jam' => $this->faker->time(),
        ];
    }
}
