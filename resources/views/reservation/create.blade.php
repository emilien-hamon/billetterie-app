@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Création - Réservation') }}</h2>
    <form action="{{ route('reservation.store') }}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="numero" class="text-black">{{ __('Numéro') }}</label>
            <input type="text" name="numero" id="numero" class="form-control" required maxlength="75" placeholder="{{ __('Numéro') }}">
        </div>

        <div class="form-group">
            <label for="id_reservation" class="text-black">{{ __('Nom et ID du client') }}</label>
            <select class="form-control" name="id_reservation" id="id_reservation">
                @foreach ($client as $clients)
                    <option value="{{$clients->id}}">{{$clients->nom}} - {{$clients->id}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_reservation" class="text-black">{{ __('Date de l\'événement') }}</label>
            <input type="date" name="date_reservation" id="date_reservation" class="form-control" required maxlength="75" placeholder="{{ __('Date de l\'événement') }}">
        </div>

        <div class="form-group">
            <label for="place_reservation" class="text-black">{{ __('Nombre de places réservées') }}</label>
            <input type="number" name="place_reservation" id="place_reservation" class="form-control" required maxlength="75" placeholder="{{ __('Nombre de places réservées') }}">
        </div>

        <div class="form-group">
            <label for="prix" class="text-black">{{ __('Prix') }}</label>
            <input type="number" name="prix" id="prix" class="form-control" required maxlength="75" placeholder="{{ __('Prix') }}">
        </div>

        <div class="form-group">
            <label for="salle_id" class="text-black">{{ __('Nom et ID de la salle') }}</label>
            <select class="form-control" name="salle_id" id="salle_id">
                @foreach ($salle as $salles)
                    <option value="{{$salles->id}}">{{$salles->nom}} - {{$salles->id}}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
