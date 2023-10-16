@extends('layout.header')

@section('content')
<div class="container">
    <h2>Liste des salles :</h2>
    <div class="row">
        @foreach ($salle as $salles)
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Salle : {{$salles->nom}}</h5>
                    <ul class="list-unstyled">
                        <li><strong>Adresse :</strong> {{$salles->adresse}}</li>
                        <li><strong>Nombre de places :</strong> {{$salles->place}}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
