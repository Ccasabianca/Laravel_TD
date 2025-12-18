<!-- resources/views/partials/header.blade.php -->
<header>
    <nav>
        <a href="{{ route('home') }}">
            <img src="{{ asset('logo.png') }}" alt="Logo">
        </a>
        <div>
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('animal.create') }}">Ajouter un animal</a>
        </div>
    </nav>
</header>