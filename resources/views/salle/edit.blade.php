@extends('layout.header')

@section('content')
<div class="container py-4">
    <h2 >Mise à jour - Salle</h2>
    <form action="{{ route('salle.update', ['salle' => $salle->id]) }}" method="post">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nom" class="text-white">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required maxlength="75" value="{{ old('nom', $salle->nom) }}">
        </div>

        <div class="form-group">
            <label for="adresse" class="text-white">Adresse</label>
            <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Nombre de place" required maxlength="75" value="{{ old('adresse', $salle->adresse) }}">
        </div>

        <div class="form-group">
            <label for="place" class="text-white">Place</label>
            <input type="number" name="place" id="place" class="form-control" placeholder="Nombre de place" required value="{{ old('place', $salle->place) }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Valider</button>
        </div>
    </form>
</div>
@endsection
