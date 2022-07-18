@extends('layouts.dashboard');

@section('content')
    <form method="POST" action="{{ route('admin.athletes.store') }}">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="name" class="form-label">Nome e cognome</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Sesso</label>
            <input type="text" class="form-control" id="genre">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
