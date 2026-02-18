<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// problem 1
Route::get('/student/{id}/{name}', function ($id, $name){
    return view('student', [
        'id' => $id,
        'name' => $name
    ]);
});

// problem 2
Route::get('/course/{course}/{yearLevel?}', function ($course, $yearLevel = 1){
    return view ('course', [
        'course' => $course,
        'yearLevel' => $yearLevel
    ]);
});

// problem 3
Route::get('/ojt/{company}/{city}/{allowance?}', function ($company, $city, $allowance = 'No'){
    return view ('ojt', [
        'company' => $company,
        'city' => $city,
        'allowance' => $allowance
    ]);
});

// problem 4
Route::get('/event/{event}/{participant}/{yearLevel}', function ($event, $participant, $yearLevel){
    return view ('event', [
        'event' => $event,
        'participant' => $participant,
        'yearLevel' => $yearLevel
    ]);
});