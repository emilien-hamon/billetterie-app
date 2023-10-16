@extends('layout.header')

@section('content')
<div class="container">
    <h2>Liste des réservations :</h2>
    <div class="row">
        @foreach ($reservation as $reservations)
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Réservation n° {{$reservations->numero}}</h5>
                    <ul class="list-unstyled">
                        <li><strong>Date :</strong> {{$reservations->date_reservation}}</li>
                        <li><strong>Prix :</strong> {{$reservations->prix}}</li>
                        <li><strong>Nombre de places :</strong> {{$reservations->place_reservation}}</li>
                        <li><strong>Nom et ID du client :</strong>  @foreach ($client as $clients)
                            @if ($reservations->id_reservation == $clients->id)
                                {{$clients->nom}}
                            @endif

                        @endforeach - {{$reservations->id_reservation}}</li>
                        <li><strong>Nom et ID de la salle :</strong>  @foreach ($salle as $salles)
                            @if ($reservations->id_reservation == $salles->id)
                                {{$salles->nom}}
                            @endif

                        @endforeach - {{$reservations->id_reservation}}</li>
                        <form method="POST" action="{{ route('reservation.destroy', ['reservation' => $reservations->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger delete-user" value="Supprimer">
                        </form>

                        <a href="{{ route('reservation.edit', ['reservation' => $reservations->id]) }}"
                            class="btn btn-warning">Modifier</a>
                            <a href="{{ route('reservation.show', ['reservation' => $reservations->id]) }}"
                                class="btn btn-warning">Voir</a>

                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{ route('reservation.create') }}" class="btn btn-warning">Créer</a>
</div>
@endsection
