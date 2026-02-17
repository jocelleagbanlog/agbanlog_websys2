<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/evaluation', function (Request $request) {
    $name = $request->query('name');
    $prelim = $request->query('prelim');
    $midterm = $request->query('midterm');
    $final = $request->query('final');

    $average = null;

    if ($name && $prelim !== null && $midterm !== null && $final !== null) {
        $average = ($prelim + $midterm + $final) / 3;
    }

    return view('evaluation', compact('name', 'prelim', 'midterm', 'final', 'average'));
});
