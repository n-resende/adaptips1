@extends('template')

@section('assets')
<link rel="stylesheet" href="{{ asset('css/template.css') }}">
@endsection

@section('title', 'Filmes')

@section('navbar')
<nav class="nav-container mobile-display">
    <form action="{{ route('movie.index') }}" method="GET" class="nav-form">
        <input type="text" id="search" name="search" placeholder="PESQUISAR" class="navbar">
        <button class="nav-button"><img src="images/search.svg" alt="PESQUISAR" class="nav-button-icon"></button>
    </form>
</nav>
@endsection

@section('content')
@foreach ($movies as $movie)
    <div class="movie-card">
        <div>
            <h2 class="movie-title">{{ $movie->title }}</h2>
            
        </div>

        <div class="info-container">

            <img src="storage/{{ $movie->image }}" alt="Imagem" class="movie-image">

            <div class="movie-card-button">
                <a href="{{ route('movie.edit', $movie->id) }}"><button class="movie-button">EDITAR</button></a>
                <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="movie-button">DELETAR</button>
                </form>
            </div>

            <p><strong>Gênero:</strong> {{ $movie->genre }}</p>
            <p><strong>Lançamento:</strong> {{ $movie->release }}</p>
            <p><strong>País:</strong> {{ $movie->country->name }}</p>
            <p><strong>Nota:</strong> {{ $movie->rating }}/10</p>
            <p><strong>Sinopse:</strong> {{ $movie->synopsis }}</p>
        </div>  
    </div>
@endforeach
@if(count($movies) == 0 && $search)
    <h3>Nenhum filme foi encontrado</h3>
@elseif(count($movies) == 0)
    <h3>Você ainda não adicionou nenhum filme</h3>
@endif
@endsection