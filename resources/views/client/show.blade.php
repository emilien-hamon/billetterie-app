@extends('layout.header')
@section('content')
<div class="container h-100 mt-5">
    <div class="row align-items-center h-100">
        <div class="col-md-6 mx-auto">
            <div class="card bg-light shadow">
                <div class="card-body text-center">
                    <h1 class="card-title">{{ $client->nom }} {{ $client->prenom }}</h1>
                    <p class="card-text">{{ __('Email') }} : {{ $client->email }}</p>
                    <p class="card-text">{{ __('Id') }} : {{ $client->id }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
