<?php

use Illuminate\Support\Facades\Route;

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
    $headerMenu = config('db.menu');

    $mainComics = config('db.comics');

    $footerDcComics = config('db.dcComics');
    $footerShop = config('db.shop');
    $footerDc = config('db.dc');
    $footerSites = config('db.sites');
    $footerSocialIcons = config('db.socialIcons');
    $footerCards = config('db.shopCards');
    return view('home', compact('headerMenu', 'mainComics', 'footerDcComics', 'footerShop', 'footerDc', 'footerSites', 'footerSocialIcons', 'footerCards'));
});

Route::get('/characters', function () {
    $headerMenu = config('db.menu');

    $footerDcComics = config('db.dcComics');
    $footerShop = config('db.shop');
    $footerDc = config('db.dc');
    $footerSites = config('db.sites');
    $footerSocialIcons = config('db.socialIcons');
    $footerCards = config('db.shopCards');
    return view('characters', compact('headerMenu', 'footerDcComics', 'footerShop', 'footerDc', 'footerSites', 'footerSocialIcons', 'footerCards'));
});

Route::get('/comics', function () {
    $headerMenu = config('db.menu');

    $footerDcComics = config('db.dcComics');
    $footerShop = config('db.shop');
    $footerDc = config('db.dc');
    $footerSites = config('db.sites');
    $footerSocialIcons = config('db.socialIcons');
    $footerCards = config('db.shopCards');
    return view('comics', compact('headerMenu', 'footerDcComics', 'footerShop', 'footerDc', 'footerSites', 'footerSocialIcons', 'footerCards'));
});
