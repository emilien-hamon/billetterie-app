<?php
namespace App\Http\Controllers;

use App\Http\Repositories\ReservationRepository;
use App\Http\Requests\ReservationRequest;
use App\Mail\InfoMail;
use App\Models\Client;
use App\Models\Reservation;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    private $repository;

    public function __construct(ReservationRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = Client::all();
        $salle = Salle::all();
        $reservation = Reservation::all();

        return view('reservation.reservation', compact('reservation', 'client', 'salle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $salle = Salle::all();
        $client = Client::all();

        return view('reservation.create', compact('client', 'salle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequest $request)
    {
        $reservation = $this->repository->store($request);

        $this->sendInfoMail($reservation, 'created');

        return redirect()->route('reservation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $client = Client::all();
        $salle = Salle::all();

        return view('reservation.show', compact('reservation', 'client', 'salle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $client = Client::all();
        $salle = Salle::all();

        $reservation = Reservation::find($id);

        return view('reservation.edit', compact('reservation', 'client', 'salle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $this->repository->update($request, $reservation);

        $this->sendInfoMail($reservation, 'updated');

        return redirect()->route('reservation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();

        $this->sendInfoMail($reservation, 'deleted');

        return redirect()->route('reservation.index');
    }

    private function sendInfoMail(Reservation $reservation, $action)
    {
        Mail::to('contact@billetterie.fr')->send(new InfoMail(Auth::user(), $reservation, $action));
    }
}

