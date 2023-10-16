@extends('layout.header')

@section('content')
<div class="container">
    <h2>Liste des salles :</h2>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Nom de la salle</th>
                <th>Adresse</th>
                <th>Nombre de places</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salle as $salles)
            <tr>
                <td>{{$salles->nom}}</td>
                <td>{{$salles->adresse}}</td>
                <td>{{$salles->place}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
