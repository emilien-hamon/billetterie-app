@extends('layout.header')
@section('content')
<div class="container">
    <h2>{{ __('Liste des réservations :') }}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('Réservation n°') }}</th>
                <th>{{ __('Date') }}</th>
                <th>{{ __('Prix') }}</th>
                <th>{{ __('Nombre de places') }}</th>
                <th>{{ __('Nom du client') }}</th>
                <th>{{ __('Nom de la salle') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservation as $reservations)
            <tr>
                <td>{{$reservations->numero}}</td>
                <td>{{$reservations->date_reservation}}</td>
                <td>{{$reservations->prix}}</td>
                <td>{{$reservations->place_reservation}}</td>
                <td>
                    @foreach ($client as $clients)
                        @if ($reservations->id_reservation == $clients->id)
                            {{$clients->nom}}
                        @endif
                    @endforeach
                </td>
                <td>
                    @foreach ($salle as $salles)
                        @if ($reservations->salle_id == $salles->id)
                            {{$salles->nom}}
                        @endif
                    @endforeach
                </td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('reservation.show', ['reservation' => $reservations->id]) }}" class="btn btn-warning rounded">{{ __('Voir') }}</a>
                        <span class="mx-1"></span>
                        <a href="{{ route('reservation.edit', ['reservation' => $reservations->id]) }}" class="btn btn-warning rounded">{{ __('Modifier') }}</a>
                        <span class="mx-1"></span>
                        <form method="POST" action="{{ route('reservation.destroy', ['reservation' => $reservations->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger rounded delete-user">{{ __('Supprimer') }}</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{ route('reservation.create') }}" class="btn btn-warning">{{ __('Ajouter une nouvelle réservation') }}</a>
    </div>
</div>
@endsection
