@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2 >{{ __('Création - Client') }}</h2>
    <form action="{{ route('client.store') }}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="nom" class="text-white">{{ __('Nom') }}</label>
            <input type="text" name="nom" id="nom" class="form-control" required maxlength="75" placeholder="{{ __('Nom') }}">
        </div>

        <div class="form-group">
            <label for "prenom" class="text-white">{{ __('Prénom') }}</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required maxlength="75" placeholder="{{ __('Prénom') }}">
        </div>

        <div class="form-group">
            <label for="email" class="text-white">{{ __('Email') }}</label>
            <input type="email" name="email" id="email" class="form-control" required maxlength="75" placeholder="{{ __('Email') }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
