<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $books = Book::where('language', 'Swahili')->get();
    return view('welcome', ['books' => $books]);
});
