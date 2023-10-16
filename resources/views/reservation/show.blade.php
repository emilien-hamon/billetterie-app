@extends('layout.header')

@section('content')
<div class="container h-100 mt-5">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <div class="card bg-light shadow">
                <div class="card-body text-center">
                    <h1 class="card-title">Réservation N°{{$reservation->numero}}</h1>
                    <p class="card-text">Nom du client : @foreach ($client as $clients)
                        @if ($clients->id == $reservation->id_reservation)
                            {{$clients->nom}}
                        @endif
                    @endforeach</p>
                    <p class="card-text">Prénom du client : @foreach ($client as $clients)
                        @if ($clients->id == $reservation->id_reservation)
                            {{$clients->prenom}}
                        @endif
                    @endforeach</p>
                    <p class="card-text">Id du client : {{$reservation->id_reservation}}</p>
                    <p class="card-text">Nombre de place : {{$reservation->place_reservation}} personnes</p>
                    <p class="card-text">Date : {{$reservation->date_reservation}}</p>
                    <p class="card-text">Prix : {{$reservation->Prix}} personnes</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
