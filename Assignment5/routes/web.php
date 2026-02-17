<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/evaluation/{name}/{prelim}/{midterm}/{final}', function ($name, $prelim, $midterm, $final) {
    return view('evaluation', compact('name', 'prelim', 'midterm', 'final'));
});
