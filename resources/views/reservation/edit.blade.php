@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Mise à jour - Réservation') }}</h2>
    <form action="{{ route('reservation.update', ['reservation' => $reservation->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="numero" class="text-black">{{ __('Numéro') }}</label>
            <input type="text" name="numero" id="numero" class="form-control" required maxlength="75"
                placeholder="{{ __('Numéro') }}" value="{{ old('numero', $reservation->numero) }}">
        </div>

        <div class="form-group">
            <label for="id_reservation" class="text-black">{{ __('Nom et ID du client') }}</label>
            <select class="form-control" name="id_reservation" id="id_reservation">
                <option selected value="{{ old('id', $reservation->id_reservation) }}">
                    @foreach ($client as $clients)

                        @if ($reservation->id_reservation == $clients->id)
                        {{$clients->nom}}
                        @endif
                    @endforeach
                    - {{ old('id', $reservation->id_reservation) }}
                </option>
                @foreach ($client as $clients)
                    <option value="{{ $clients->id }}">{{ $clients->nom }} - {{ $clients->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_reservation" class="text-black">{{ __('Date de l\'événement') }}</label>
            <input type="date" name="date_reservation" id="date_reservation" class="form-control" required
                maxlength="75" placeholder="{{ __('Date de l\'événement') }}" value="{{ old('date_reservation', $reservation->date_reservation) }}">
        </div>

        <div class="form-group">
            <label for="place_reservation" class="text-black">{{ __('Nombre de places réservées') }}</label>
            <input type="number" name="place_reservation" id="place_reservation" class="form-control" required
                maxlength="75" placeholder="{{ __('Nombre de places réservées') }}" value="{{ old('place_reservation', $reservation->place_reservation) }}">
        </div>

        <div class="form-group">
            <label for="prix" class="text-black">{{ __('Prix') }}</label>
            <input type="number" name="prix" id="prix" class="form-control" required maxlength="75"
                placeholder="{{ __('Prix') }}" value="{{old('prix', $reservation->prix) }}">
        </div>

        <div class="form-group">
            <label for="id_salle" class="text-black">{{ __('Nom et ID de la salle') }}</label>
            <select class="form-control" name="salle_id" id="salle_id">
                <option selected value="{{ old('id', $reservation->id_reservation) }}">
                    @foreach ($salle as $salles)
                        @if ($reservation->salle_id == $salles->id)
                        {{$salles->nom}}
                        @endif
                    @endforeach
                    - {{ old('id', $reservation->salle_id) }}
                </option>
                @foreach ($salle as $salles)
                    <option value="{{ $salles->id }}">{{ $salles->nom }} - {{ $salles->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>

    </form>
</div>
@endsection
