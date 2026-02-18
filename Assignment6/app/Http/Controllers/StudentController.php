<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // with controller

    // problem 1
    public function studentProfile($id, $name)
    {
        return view('student', compact('id', 'name'));
    }

    // problem 2
    public function courseEnrollment($course, $year = 1)
    {
        return view('course', compact('course', 'yearLevel'));
    }

    // problem 3
    public function ojtCompany($company, $city, $allowance = 'No')
    {
        return view('ojt', compact('company', 'city', 'allowance'));
    }

    // problem 4
    public function eventRegistration($event, $participant, $year)
    {
        return view('event', compact('event', 'participant', 'yearLevel'));
    }
}

// for web.php
// //with controller

// use App\Http\Controllers\StudentController;


// Route::get('/student/{id}/{name}', [StudentController::class, 'studentProfile']);

// Route::get('/course/{course}/{yearLevel?}', [StudentController::class, 'courseEnrollment']);

// Route::get('/ojt/{company}/{city}/{allowance?}', [StudentController::class, 'ojtCompany']);

// Route::get('/event/{event}/{participant}/{yearLevel}', [StudentController::class, 'eventRegistration']);
