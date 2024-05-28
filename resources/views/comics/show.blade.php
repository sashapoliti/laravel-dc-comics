@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main id="home" class="pt-5">
    <div class="container">
        <h2 class="text-uppercase">{{ $comic['series'] }}</h2>
        <div class="comics container d-flex">
            <div class="me-4">
                <img class="w-100" src="{{ $comic['thumb'] }}" alt="Copertina di {{ $comic['series'] }}" />
            </div>
            <div>
                <p>{{ $comic['type'] }}</p>
                <p>{{ $comic['price'] }}</p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('comics.edit', $comic->id) }}">
                <button class="text-uppercase">Edit</button>
            </a>
            <button class="text-uppercase" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
        </div>
    </div>
</main>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi davvero eliminare questo prodotto?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            {{ $comic['series'] }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        </div>
    </div>
</div>

@endsection