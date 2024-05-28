<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $mainComics = config('db.comics');
    
    return view('home', compact('mainComics'));
});

Route::resource('comics', ComicController::class)->except(['create', 'show', 'edit']);

Route::get('/characters', function () {
    return view('characters');
});
