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
                            <a role="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $comic->id }}">
                                <div class="cover">
                                    <img src="{{ $comic['thumb'] }}" alt="Copertina di {{ $comic['series'] }}" />
                                </div>
                                <h6 class="text-uppercase">{{ $comic['series'] }}</h6>
                            </a>
                        </div>

                        {{-- MODAL SHOW --}}
                        <div class="modal-show modal fade" id="exampleModal{{ $comic->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel{{ $comic->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="img-container">
                                            <img src="{{ $comic['thumb'] }}" alt="Copertina di {{ $comic['series'] }}">
                                            <div class="info">
                                                <h2>{{ $comic['series'] }}</h2>
                                                <div class="command d-flex align-items-center">
                                                    <button class="plus d-flex align-items-center justify-content-center">
                                                        <i class="fa-solid fa-plus"></i>
                                                    </button>
                                                    <button class="pref d-flex align-items-center justify-content-center">
                                                        <i class="fa-regular fa-thumbs-up"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="px-5">{{ $comic['type'] }}</p>
                                        <p class="px-5">{{ $comic['price'] }}</p>
                                        <div class="text-center">
                                            <button class="text-uppercase" data-bs-toggle="offcanvas"
                                                data-bs-target="#offcanvasEdit{{ $comic->id }}"
                                                aria-controls="offcanvasEdit{{ $comic->id }}">Edit</button>

                                            {{-- OFFCANVAS EDIT --}}
                                            <div class="offcanvas offcanvas-end" tabindex="-1"
                                                id="offcanvasEdit{{ $comic->id }}"
                                                aria-labelledby="offcanvasEdit{{ $comic->id }}Label">
                                                <div class="offcanvas-header">
                                                    <h5 class="offcanvas-title" id="offcanvasEdit{{ $comic->id }}Label">
                                                        Edit {{ $comic['series'] }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="mb-3">
                                                            <label for="series" class="form-label">Title</label>
                                                            <input type="text" class="form-control" id="series"
                                                                name="series" value="{{ $comic->series }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="thumb" class="form-label">Image</label>
                                                            <input type="text" class="form-control" id="thumb"
                                                                name="thumb" value="{{ $comic->thumb }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="type" class="form-label">Type</label>
                                                            <select class="form-select" name="type" id="type"
                                                                value="{{ $comic->type }}">
                                                                <option value="comic book"
                                                                    {{ $comic->type === 'comic book' ? 'selected' : '' }}>
                                                                    comic book</option>
                                                                <option value="graphic novel"
                                                                    {{ $comic->type === 'graphic novel' ? 'selected' : '' }}>
                                                                    graphic novel</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="price" class="form-label">Price</label>
                                                            <input type="text" class="form-control" id="price"
                                                                name="price" value="{{ $comic->price }}" required>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="text-uppercase">Edit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <button class="text-uppercase" data-bs-toggle="modal"
                                                data-bs-target="#deleteModal{{ $comic->id }}">Delete</button>

                                            {{-- MODAL DELETE --}}
                                            <div class="modal fade" id="deleteModal{{ $comic->id }}" tabindex="-1" aria-labelledby="deleteModal{{ $comic->id }}Label" aria-hidden="true">
                                                <div class="modal-dialog">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h1 class="modal-title fs-5" id="deleteModal{{ $comic->id }}Label">Modal title</h1>
                                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                      ...
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center">
                <button class="text-uppercase" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                    aria-controls="offcanvasExample">Add comic</button>
            </div>

            {{-- OFFCANVAS CREATE --}}
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Add new Comic</h5>
                    <a type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></a>
                </div>
                <div class="offcanvas-body">
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


    </main>



@endsection
