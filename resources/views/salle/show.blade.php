@extends('layout.header')

@section('content')
<div class="container h-100 mt-5">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <div class="card bg-light shadow">
                <div class="card-body text-center">
                    <h1 class="card-title">{{$salle->nom}}</h1>
                    <p class="card-text">{{$salle->adresse}}</p>
                    <p class="card-text">Capacité : {{$salle->place}} personnes</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
