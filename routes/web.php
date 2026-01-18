<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});
Route::get('/download-cv', function () {
    return response()->download(storage_path('app/public/cv/fatazakie.pdf'));
});
