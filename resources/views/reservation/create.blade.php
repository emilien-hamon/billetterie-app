@extends('layout.header')

@section('content')
<div class="container py-4">
    <h2>Création - Réservation</h2>
    <form action="{{ route('reservation.store') }}" method="post">
        @csrf
        @method('post')

        <div class="form-group">
            <label for="numero" class="text-black">Numéro</label>
            <input type="text" name="numero" id="numero" class="form-control" required maxlength="75" placeholder="Numéro">
        </div>

        <div class="form-group">
            <label for="id_reservation" class="text-black">Nom et ID du client</label>
            <select class="form-control" name="id_reservation" id="id_reservation">
                @foreach ($client as $clients)
                    <option value="{{$clients->id}}">{{$clients->nom}} - {{$clients->id}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_reservation" class="text-black">Date de l'événement</label>
            <input type="date" name="date_reservation" id="date_reservation" class="form-control" required maxlength="75" placeholder="Date de l'événement">
        </div>

        <div class="form-group">
            <label for="place_reservation" class="text-black">Nombre de places réservées</label>
            <input type="number" name="place_reservation" id="place_reservation" class="form-control" required maxlength="75" placeholder="Nombre de places réservées">
        </div>

        <div class="form-group">
            <label for="prix" class="text-black">Prix</label>
            <input type="number" name="prix" id="prix" class="form-control" required maxlength="75" placeholder="Prix">
        </div>

        <div class="form-group">
            <label for="salle_id" class="text-black">Nom et ID de la salle</label>
            <select class="form-control" name="salle_id" id="salle_id">
                @foreach ($salle as $salles)
                    <option value="{{$salles->id}}">{{$salles->nom}} - {{$salles->id}}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Valider</button>
        </div>
    </form>
</div>
@endsection
