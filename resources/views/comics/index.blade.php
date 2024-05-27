@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main id="home" class="pt-5">
    <div class="container">
        <h2 class="text-uppercase">My Comics</h2>
        <div class="comics container">
            <div class="row gx-4 gy-5">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-2">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <div class="cover">
                                <img src="{{ $comic['thumb'] }}" alt="Copertina di {{ $comic['series'] }}" />
                            </div>
                            <h6 class="text-uppercase">{{ $comic['series'] }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <button class="text-uppercase">Load More</button>
        </div>
    </div>
</main>

@endsection