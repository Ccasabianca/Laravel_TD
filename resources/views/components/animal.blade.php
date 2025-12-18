<div class="animal">
    <a href="{{ route('animals.show', $animal->id) }}">
        <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}">
    </a>
    <h3>{{ $animal->name }}</h3>
    <p>Espèce : {{ $animal->species }}</p>
    <p>Âge : {{ $animal->age }} ans</p>
    <p>{{ $animal->description }}</p>
    <div class="button-row flex justify-around mt-4">
        <a href="{{ route('animal.update', $animal->id) }}">Modifier</a>
        <a href="{{ route('animal.delete', $animal->id) }}">Supprimer</a>
    </div>
</div>