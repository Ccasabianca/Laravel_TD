<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
<title>{{ config('app.name', 'RefugeConnect') }}</title>
@section('content')
<h1 class="title">Nos animaux</h1>
<div class="animal-container">
    @forelse ($animals as $animal)
    <x-animal :animal="$animal" />
    @empty
    <p>Aucun animal</p>
    @endforelse
</div>
@endsection