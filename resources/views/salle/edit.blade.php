@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Mise à jour - Salle') }}</h2>
    <form action="{{ route('salle.update', ['salle' => $salle->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nom" class="text-white">{{ __('Nom') }}</label>
            <input placeholder="{{__('Nom')}}" type="text" name="nom" id="nom" class="form-control" required maxlength="75" value="{{ old('nom', $salle->nom) }}">
        </div>

        <div class="form-group">
            <label for="adresse" class="text-white">{{ __('Adresse') }}</label>
            <input placeholder="{{__('Adresse')}}" type="text" name="adresse" id="adresse" class="form-control" placeholder="{{ __('Adresse') }}" required maxlength="75" value="{{ old('adresse', $salle->adresse) }}">
        </div>

        <div class="form-group">
            <label for="place" class="text-white">{{ __('Nombre de places') }}</label>
            <input placeholder="{{__('Nombre de place')}}" type="number" name="place" id="place" class="form-control" placeholder="{{ __('Nombre de place') }}" required value="{{ old('place', $salle->place) }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
