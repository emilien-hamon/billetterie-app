<?php

namespace App\Http\Controllers;

use App\Http\Repositories\ClientRepository;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $repository;
    public function __construct(ClientRepository $repository) {
        $this->repository=$repository;
    }
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $client = Client::all();

        return view('client.client', compact('client'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->repository->store($request);
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $this->repository->update($request, $client);
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}
