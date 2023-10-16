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
                <td>
                    <form method="POST" action="{{ route('salle.destroy', ['salle' => $salles->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger delete-user" value="Supprimer">
                    </form>

                    <a href="{{ route('salle.edit', ['salle' => $salles->id]) }}"
                        class="btn btn-warning">Modifier</a>
                        <a href="{{ route('salle.show', ['salle' => $salles->id]) }}"
                            class="btn btn-warning">Voir</a>

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <a href="{{ route('salle.create') }}" class="btn btn-warning">Créer</a>
</div>
@endsection
