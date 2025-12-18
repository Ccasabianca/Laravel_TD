<!-- resources/views/pages/animal-details.blade.php -->
@extends('layouts.app')
@section('title', "Animal " . $animal->id)
@section('css', 'resources/css/animal-details.css')
@section('content')
<div class="animal-container">
    <h1 class="title">{{ $animal->name }}</h1>
    <div class="animal">
        <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}">
        <div class="animal-infos">
            <p>Espèce : {{ $animal->species }}</p>
            <p>Âge : {{ $animal->age }} ans</p>
            <p>{{ $animal->description }}</p>
        </div>
    </div>
</div>
@endsection