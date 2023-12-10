<?php

namespace App\Http\Controllers;

use App\Http\Repositories\SalleRepository;
use App\Http\Requests\SalleRequest;
use App\Mail\InfoMail;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class SalleController extends Controller
{
    private $repository;

    public function __construct(SalleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salle = Salle::all();

        return view('salle.salle', compact('salle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SalleRequest $request)
    {
        $salle = $this->repository->store($request);

        $this->sendInfoMail($salle, 'created');

        return redirect()->route('salle.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salle $salle)
    {
        return view('salle.show', compact('salle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salle $salle)
    {
        return view('salle.edit', compact('salle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SalleRequest $request, Salle $salle)
    {
        $this->repository->update($request, $salle);

        $this->sendInfoMail($salle, 'updated');

        return redirect()->route('salle.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salle $salle)
    {
        $salle->delete();

        $this->sendInfoMail($salle, 'deleted');

        return redirect()->route('salle.index');
    }

    private function sendInfoMail(Salle $salle, $action)
    {
        Mail::to('contact@billetterie.fr')->send(new InfoMail(Auth::user(), $salle, $action));
    }

}
