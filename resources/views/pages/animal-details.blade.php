@extends('layouts.app')

@section('title', "Animal " . $animal->id)

@push('styles')
@vite('resources/css/animal-details.css')
@endpush

@section('content')
<div class="animal-details-container">
    <h1 class="title">{{ $animal->name }}</h1>
    <div class="animal-details">
        <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}">
        <div class="animal-infos">
            <p>Espèce : {{ $animal->species }}</p>
            <p>Âge : {{ $animal->age }} ans</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
</div>
@endsection