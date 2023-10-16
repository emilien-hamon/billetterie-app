@extends('layout.header')
@section('content')
    <div class="container">
        <h2>Liste des clients :</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($client as $clients)
                    <tr>
                        <td>{{ $clients->nom }}</td>
                        <td>{{ $clients->prenom }}</td>
                        <td>{{ $clients->email }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('client.show', ['client' => $clients->id]) }}" class="btn btn-warning rounded">Voir</a>
                                <span class="mx-1"></span>
                                <a href="{{ route('client.edit', ['client' => $clients->id]) }}" class="btn btn-warning rounded">Modifier</a>
                                <span class="mx-1"></span>
                                <form method="POST" action="{{ route('client.destroy', ['client' => $clients->id]) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger rounded delete-user">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{ route('client.create') }}" class="btn btn-warning">Ajouter un nouveau client</a>
        </div>
    </div>
@endsection
