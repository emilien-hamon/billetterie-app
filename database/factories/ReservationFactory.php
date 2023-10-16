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
        $salle = Salle::inRandomOrder()->first();
        $client = Client::inRandomOrder()->first();
        return [
            'numero'=> $this->faker->unique()->numberBetween(1000, 1999),
            'date_reservation'=> $this->faker->date(),
            'prix'=> $this->faker->numberBetween(70, 150),
            'place_reservation'=> $this->faker->numberBetween(30, 50),
            'salle_id' => $salle->id,
            'id_reservation' => $client->id,
        ];
    }
}
