@extends('layout.header')
@section('content')
<div class="container h-100 mt-5">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <div class="card bg-light shadow">
                <div class="card-body text-center">
                    <h1 class="card-title">{{$salle->nom}}</h1>
                    <p class="card-text">{{ __('Adresse') }} : {{$salle->adresse}}</p>
                    <p class="card-text">{{ __('Nombre de place') }} : {{$salle->place}}</p>
                    <p class="card-text">{{ __('Id de la salle') }} : {{$salle->id}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
