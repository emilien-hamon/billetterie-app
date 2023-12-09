@extends('layout.header')
@section('content')
<div class="container h-100 mt-5">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <div class="card bg-light shadow">
                <div class="card-body text-center">
                    <h1 class="card-title">{{ __('Réservation N°') }}{{$reservation->numero}}</h1>
                    <p class="card-text">{{ __('Nom du client') }} : @foreach ($client as $clients)
                        @if ($clients->id == $reservation->id_reservation)
                            {{$clients->nom}}
                        @endif
                    @endforeach</p>
                    <p class="card-text">{{ __('Prénom du client') }} : @foreach ($client as $clients)
                        @if ($clients->id == $reservation->id_reservation)
                            {{$clients->prenom}}
                        @endif
                    @endforeach</p>
                    <p class="card-text">{{ __('Id du client') }} : {{$reservation->id_reservation}}</p>
                    <p class="card-text">{{ __('Nombre de place') }} : {{$reservation->place_reservation}} {{ __('personnes') }}</p>
                    <p class="card-text">{{ __('Date') }} : {{$reservation->date_reservation}}</p>
                    <p class="card-text">{{ __('Prix') }} : {{$reservation->prix}} {{('€')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
