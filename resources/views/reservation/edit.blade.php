@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Mise à jour - Réservation') }}</h2>
    <form action="{{ route('reservation.update', ['reservation' => $reservation->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="numero" class="text-black">{{ __('Numéro') }}</label>
            <x-input-text property="numero" maxlength="75" :entity="$reservation"/>
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
            <x-input-date property="date_reservation" required maxlength="75" :entity="$reservation"/>
        </div>

        <div class="form-group">
            <label for="place_reservation" class="text-black">{{ __('Nombre de places réservées') }}</label>
            <x-input-number property="place_reservation" maxlength="75" :entity="$reservation"/>
        </div>

        <div class="form-group">
            <label for="prix" class="text-black">{{ __('Prix') }}</label>
            <x-input-number property="prix" maxlength="75" :entity="$reservation"/>
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
            <x-submit-button/>
        </div>

    </form>
</div>
@endsection
