@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Création - Salle') }}</h2>
    <form action="{{ route('salle.store') }}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="nom" class="text-white">{{ __('Nom') }}</label>
            <input type="text" name="nom" id="nom" class="form-control" required maxlength="75" placeholder="{{ __('Nom') }}">
        </div>

        <div class="form-group">
            <label for="adresse" class="text-white">{{ __('Adresse') }}</label>
            <input type="text" name="adresse" id="adresse" class="form-control" required maxlength="75" placeholder="{{ __('Adresse') }}">
        </div>

        <div class="form-group">
            <label for="place" class="text-white">{{ __('Nombre de places') }}</label>
            <input type="number" name="place" id="place" class="form-control" required maxlength="75" placeholder="{{ __('Nombre de place') }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
