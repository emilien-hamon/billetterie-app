@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Mise à jour - Salle') }}</h2>
    <form action="{{ route('salle.update', ['salle' => $salle->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <br>
            <label for="nom">{{ __('Nom') }}</label>
            <x-input-text property="nom" required maxlength="75" :entity="$salle"/>
        </div>

        <div class="form-group">
            <br>
            <label for="adresse">{{ __('Adresse') }}</label>
            <x-input-text property="adresse" required maxlength="75" :entity="$salle"/>
        </div>

        <div class="form-group">
            <br>
            <label for="place">{{ __('Nombre de places') }}</label>
            <x-input-number property="place" required maxlength="7" :entity="$salle"/>
        </div>

        <div class="mt-4">
            <x-submit-button/>
        </div>
    </form>
</div>
@endsection
