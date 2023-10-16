@extends('layout.header')

@section('content')
<div class="container">
    <h2>Liste des réservations :</h2>
    <div class="row">
        @foreach ($reservation as $reservations)
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Réservation n° {{$reservations->id_reservation}}</h5>
                    <ul class="list-unstyled">
                        <li><strong>Date :</strong> {{$reservations->date_reservation}}</li>
                        <li><strong>Prix :</strong> {{$reservations->prix}}</li>
                        <li><strong>Nombre de places :</strong> {{$reservations->place_reservation}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
