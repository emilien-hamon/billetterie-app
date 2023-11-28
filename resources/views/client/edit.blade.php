@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2 >{{ __('Mise à jour - Client') }}</h2>
    <form action="{{ route('client.update', ['client' => $client->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <br>
            <label for="nom">{{ __('Nom') }}</label>
            <x-input-text property="nom" required maxlength="75" :entity="$client"/>
        </div>

        <div class="form-group">
            <br>
            <label for="prenom">{{ __('Prénom') }}</label>
            <x-input-text property="prenom" required maxlength="75" :entity="$client"/>
            </div>

        <div class="form-group">
            <br>
            <label for="email">{{ __('Email') }}</label>
            <x-input-text property="email" required maxlength="75" :entity="$client"/>
            </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
