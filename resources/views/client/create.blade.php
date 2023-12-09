@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2>{{ __('Création - Client') }}</h2>
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <br>
            <label for="nom">{{ __('Nom') }}</label>
            <x-input-text property="nom" maxlength="75" :entity="null" />
        </div>

        <div class="form-group">
            <br>
            <label for="prenom">{{ __('Prénom') }}</label>
            <x-input-text property="prenom" maxlength="75" :entity="null" />
        </div>

        <div class="form-group">
            <br>
            <label for="email">{{ __('E-Mail') }}</label>
            <x-input-email property="email" maxlength="75" :entity="null" />
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
