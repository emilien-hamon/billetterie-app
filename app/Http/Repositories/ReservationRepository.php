<?php

namespace App\Http\Repositories;
use App\Models\Reservation;

class ReservationRepository
{
    public function store($request)
    {
        $reservation = new Reservation;

        $reservation->numero = $request->numero;
        $reservation->id_reservation = $request->id_reservation;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->place_reservation = $request->place_reservation;
        $reservation->prix = $request->prix;
        $reservation->salle_id = $request->salle_id;

        $reservation->save();
    }

    public function update( $request,  $reservation)
    {
        $reservation->numero = $request->numero;
        $reservation->id_reservation = $request->id_reservation;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->place_reservation = $request->place_reservation;
        $reservation->prix = $request->prix;
        $reservation->salle_id = $request->salle_id;

        $reservation->save();
    }
}
