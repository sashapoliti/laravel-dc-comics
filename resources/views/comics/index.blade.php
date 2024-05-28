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
                            <a role="button">
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
                <button class="text-uppercase" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                    aria-controls="offcanvasExample">Add comic</button>
            </div>
        </div>
    </main>

    {{-- OFFCANVAS CREATE --}}
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="series" class="form-label">Title</label>
                        <input type="text" class="form-control" id="series" name="series" required>
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" name="type" id="type">
                            <option value="comic book">comic book</option>
                            <option value="graphic novel">graphic novel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="text-uppercase">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
