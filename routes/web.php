<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');
    return view('comics.home', compact('comics'));
})->name('comics.home');

Route::get('/characters', function () {
    $comics = config('comics');
    return view('comics.characters', compact('comics'));
})->name('comics.characters');

Route::get('/movies', function () {
    $comics = config('comics');
    return view('comics.movies', compact('comics'));
})->name('comics.movies');
