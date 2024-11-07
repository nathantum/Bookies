<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    $books = [
        ["id" => 1, "Genre" => "Fiction", "Title" => "Lost in The Sun", "Author" => "Raya Pilomonia"],
        ["id" => 2, "Genre" => "Non-Fiction", "Title" => "Is The Life in Mars?", "Author" => "Kilo Miles"],
        ["id" => 3, "Genre" => "Science", "Title" => "Magnetism Spectrum", "Author" => "Hilog Gliobari"],
        ["id" => 4, "Genre" => "Math", "Title" => "Calculus", "Author" => "Thomas Finley"],
    ];

    return view('books.index', ["greeting" => "Hello", "books"=> $books]);
});

Route::get('/books/{id}', function ($id) {
    // fetch recordd with id
    return view('books.show', ["id" => $id]);
});


