@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Création - Salle') }}</h2>
    <form action="{{ route('salle.store') }}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <br>
            <label for="nom">{{ __('Nom') }}</label>
            <x-input-text property="nom" maxlength="75" :entity="null"/>
        </div>

        <div class="form-group">
            <br>
            <label for="adresse">{{ __('Adresse') }}</label>
            <x-input-text property="adresse" maxlength="75" :entity="null"/>
        </div>

        <div class="form-group">
            <br>
            <label for="place">{{ __('Nombre de places') }}</label>
            <x-input-number property="place" maxlength="75" :entity="null"/>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
