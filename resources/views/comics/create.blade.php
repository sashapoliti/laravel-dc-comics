@extends('layouts.app')

@section('title', 'Add Comic')

@section('content')
<main id="home" class="pt-5">
    <div class="container">
        <h2 class="text-uppercase">Add your comic</h2>
        <div class="comics container d-flex justify-content-center">
            <form class="w-75" action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="series" class="form-label">Title</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Image</label>
                    <input type="text" class="form-control" id="thumb" name="thumb">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select w-25" name="type" id="type">
                        <option value="comic book">comic book</option>
                        <option value="graphic novel">graphic novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="text-center">
                    <button type="submit" class="text-uppercase">Add</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection