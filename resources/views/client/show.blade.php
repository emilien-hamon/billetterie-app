@extends('layout.header')
@section('content')

    <p>{{$client->nom}}</p>
    <p>{{$client->prenom}}</p>
    <p>{{$client->email}}</p>

@endsection
