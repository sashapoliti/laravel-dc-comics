@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main id="home">
    <div id="jumbotron"></div>
    <div class="container">
        <h2 class="text-uppercase">Current Series</h2>
        <div class="comics container">
            <div class="row gx-4 gy-5">
                @foreach ($mainComics as $comic)
                    <div class="col-12 col-md-6 col-lg-4 col-xxl-2">
                        <a href="#">
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