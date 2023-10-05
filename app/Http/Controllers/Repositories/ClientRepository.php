<?php

namespace App\Http\Repositories;

use App\Models\Client;

class ClientRepository
{
    protected $client;
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    private function save(Client $client, array $inputs)
    {
        $client->nom = $inputs['nom'];
        $client->prenom = $inputs['prenom'];
        $client->email = $inputs['email'];

        $client->save();
        return $client;
    }

    public function store(array $inputs)
    {
        $client = new $this->client;
        return $this->save($client, $inputs);
    }

    public function update(Client $client, array $inputs)
    {
        return $this->save($client, $inputs);
    }

    function getData(string $pattern = '')
    {
        return $pattern !== ''
            ? Client::where('libelle', 'like', '%' . $pattern . '%')
            : Client::all();
    }
}
