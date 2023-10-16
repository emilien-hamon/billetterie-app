<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use App\Models\Salle;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::all();
        $salle = Salle::all();
        $reservation = Reservation::all();
        return view('reservation.reservation', compact('reservation','client','salle'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salle = Salle::all();
        $client = Client::all();

        return view('reservation.create',compact('client','salle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = new Reservation;

        $reservation->numero = $request->numero;
        $reservation->id_reservation = $request->id_reservation;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->place_reservation = $request->place_reservation;
        $reservation->prix = $request->prix;
        $reservation->salle_id = $request->salle_id;

        $reservation->save();

        return redirect()->route('reservation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $client = Client::all();
        $salle = Salle::all();

        return view('reservation.show', compact('reservation','client','salle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $client = Client::Find($id);
        $salle = Salle::Find($id);
        $reservation = Salle::Find($id);
        return view('reservation.edit', compact('reservation','client','salle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        $reservation->numero = $request->numero;
        $reservation->id_reservation = $request->id_reservation;
        $reservation->date_reservation = $request->date_reservation;
        $reservation->place_reservation = $request->place_reservation;
        $reservation->prix = $request->prix;
        $reservation->salle_id = $request->salle_id;

        $reservation->save();

        return redirect()->route('reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservation.index');
    }
}
