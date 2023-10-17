<?php

namespace App\Http\Repositories;
use App\Models\Salle;

class SalleRepository
{
    public function store($request)
    {
        $salle = new Salle;

        $salle->nom = $request->nom;
        $salle->adresse = $request->adresse;
        $salle->place = $request->place;

        $salle->save();


    }
    public function update($request, $salle)
    {
        $salle->nom = $request->nom;
        $salle->adresse = $request->adresse;
        $salle->place = $request->place;

        $salle->save();
    }
}
