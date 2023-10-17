@extends('layout.header')
@section('content')
<div class="container py-4">
    <h2 >{{ __('Mise à jour - Client') }}</h2>
    <form action="{{ route('client.update', ['client' => $client->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nom" class="text-white">{{ __('Nom') }}</label>
            <input placeholder="{{__('Nom')}}" type="text" name="nom" id="nom" class="form-control" required maxlength="75" value="{{ old('nom', $client->nom) }}">
        </div>

        <div class="form-group">
            <label for="prenom" class="text-white">{{ __('Prénom') }}</label>
            <input placeholder="{{__('Prénom')}}" type="text" name="prenom" id="prenom" class="form-control" required maxlength="75" value="{{ old('prenom', $client->prenom) }}">
        </div>

        <div class="form-group">
            <label for="email" class="text-white">{{ __('Email') }}</label>
            <input placeholder="{{__('Email')}}" type="email" name="email" id="email" class="form-control" required value="{{ old('email', $client->email) }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Valider') }}</button>
        </div>
    </form>
</div>
@endsection
