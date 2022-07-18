@extends('layouts.dashboard')

@section('content')
    <h3 class="my-4">Lista degli atleti</h3>

    <ul class="my-4">
        @foreach ($athletes as $athlete)
            <li>
                <a href="{{ route('admin.athletes.show', ['athlete' => $athlete->id]) }}">Nome: {{ $athlete->name }}</a>
                <p>Genere: {{ $athlete->genre }}</p>
            </li>
        @endforeach
    </ul>
@endsection