<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/evaluation/{name}/{prelim}/{midterm}/{final}', function ($name, $prelim, $midterm, $final) {
    return view('evaluation', compact('name', 'prelim', 'midterm', 'final'));
});
