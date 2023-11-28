@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2 >{{ __('Création - Client') }}</h2>
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <br>
            <label for="nom">{{ __('Nom') }}</label>
            <x-input-text property="nom" required maxlength="75"/>
        </div>

        <div class="form-group">
            <br>
            <label for="nom">{{ __('Prénom') }}</label>
            <x-input-text property="prenom" required maxlength="75"/>
        </div>

        <div class="form-group">
            <br>
            <label for="nom">{{ __('E-Mail') }}</label>
            <x-input-email property="email" required maxlength="75"/>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
