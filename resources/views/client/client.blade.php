@extends('layout.header')
@section('content')
    <div class="m-4">
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
                            <form method="POST" action="{{ route('client.destroy', ['client' => $clients->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger delete-user" value="Supprimer">
                            </form>

                            <a href="{{ route('client.edit', ['client' => $clients->id]) }}"
                                class="btn btn-warning">Modifier</a>
                                <a href="{{ route('client.show', ['client' => $clients->id]) }}"
                                    class="btn btn-warning">Voir</a>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('client.create') }}" class="btn btn-warning">Créer</a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </div>
@endsection
