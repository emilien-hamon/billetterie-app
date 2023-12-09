<?php

namespace App\Http\Repositories;
use App\Models\Client;

class ClientRepository
{
    public function store($request)
    {
        $client = new Client;

        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email;

        $client->save();

        return $client;
    }


    public function update($request, $client)
    {
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->email = $request->email;

        $client->save();
    }
}
