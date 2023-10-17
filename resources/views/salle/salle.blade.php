@extends('layout.header')
@section('content')
<div class="container">
    <h2>{{ __('Liste des salles :') }}</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>{{ __('Nom de la salle') }}</th>
                <th>{{ __('Adresse') }}</th>
                <th>{{ __('Nombre de places') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salle as $salles)
            <tr>
                <td>{{$salles->nom}}</td>
                <td>{{$salles->adresse}}</td>
                <td>{{$salles->place}}</td>
                <td>
                    <div class="btn-group">
                        <a href="{{ route('salle.show', ['salle' => $salles->id]) }}" class="btn btn-warning rounded">{{ __('Voir') }}</a>
                        <span class="mx-1"></span>
                        <a href="{{ route('salle.edit', ['salle' => $salles->id]) }}" class="btn btn-warning rounded">{{ __('Modifier') }}</a>
                        <span class="mx-1"></span>
                        <form method="POST" action="{{ route('salle.destroy', ['salle' => $salles->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger rounded delete-user">{{ __('Supprimer') }}</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <a href="{{ route('salle.create') }}" class="btn btn-warning">{{ __('Ajouter une nouvelle salle') }}</a>
    </div>
</div>
@endsection
