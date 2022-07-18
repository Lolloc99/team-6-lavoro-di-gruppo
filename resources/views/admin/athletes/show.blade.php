@extends('layouts.dashboard')

@section('content')
    <h2>Dettagli dell'atleta</h2>

    <h3>Nome: {{ $current_athlete->name }}</h3>
    <p>Sesso: {{ $current_athlete->genre }}</p>

    <p>Nazionalità: {{ $nationality->name }}, {{ $nationality->acronym }}</p>

    @forelse ($categories as $category)
        <p>Categoria: {{ $category->discipline }} | {{ $category->name }}</p>
    @empty
        <p>Categoria: Nessuna</p>
    @endforelse
@endsection
