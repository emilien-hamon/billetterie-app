<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Salle;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'numero'=> $this->faker->numberBetween(1, 100),
            'date'=> $this->faker->date(),
            'heure'=> $this->faker->numberBetween(0, 24),
            'prix'=> $this->faker->numberBetween(70, 150),
            'place'=> $this->faker->numberBetween(30, 50),
            //'salle_id' => Salle::factory()->create(),
            //'client_id' => Client::factory()->create(),
        ];
    }
}
