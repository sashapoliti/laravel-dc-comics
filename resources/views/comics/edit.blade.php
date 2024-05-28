@extends('layouts.app')

@section('title', 'Edit Comic')

@section('content')
<main id="home" class="pt-5">
    <div class="container">
        <h2 class="text-uppercase">Edit {{ $comic->series }}</h2>
        <div class="comics container d-flex justify-content-center">
            <form class="w-75" action="{{ route('comics.update', $comic->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="series" class="form-label">Title</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select w-25" name="type" id="type" value="{{ $comic->type }}">
                        <option value="comic book" {{ $comic->type === 'comic book' ? 'selected' : '' }}>comic book</option>
                        <option value="graphic novel" {{ $comic->type === 'graphic novel' ? 'selected' : '' }}>graphic novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="text-uppercase">Edit</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection