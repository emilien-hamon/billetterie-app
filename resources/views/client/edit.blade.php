@extends('layout.header')

@section('content')
<div class="container py-4">
    <h2 >Mise à jour - Client</h2>
    <form action="{{ route('client.update', ['client' => $client->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nom" class="text-white">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required maxlength="75" value="{{ old('nom', $client->nom) }}">
        </div>

        <div class="form-group">
            <label for="prenom" class="text-white">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required maxlength="75" value="{{ old('prenom', $client->prenom) }}">
        </div>

        <div class="form-group">
            <label for="email" class="text-white">Email</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $client->email) }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Valider</button>
        </div>
    </form>
</div>
@endsection
