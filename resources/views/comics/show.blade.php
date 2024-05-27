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
    </div>
</main>

@endsection