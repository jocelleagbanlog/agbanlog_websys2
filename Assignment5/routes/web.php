<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/evaluation', function (){
    $name = request('name');
    $prelim = request('prelim');
    $midterm = request('midterm');
    $final = request('final');

    $average = null;
    $letter = null;
    $remarks = null;
    $award = null;

    if($name && $prelim !== null && $midterm !== null && $final !== null){
        $average = ($prelim + $midterm + $final) / 3;

        if ($average >= 90 && $average <= 100){
            $letter = "A";
        } elseif ($average >= 80){
            $letter = "B";
        } elseif ($average >= 70){
            $letter = "C";
        } elseif ($average >= 60){
            $letter = "D";
        } else {
            $letter = "F";
        }
        
        if ($average >= 75){
            $remarks = "Passed";
        } else {
            $remarks = "Failed";
        }

        if ($average >= 98){
            $award = "With Highest Honors";
        } elseif ($average >= 95){
            $award = "With High Honors";
        } elseif ($average >= 90){
            $award = "With Honors";
        } else {
            $award = "No Award";
        }
    }

    return view('evaluation', [
        'name' => $name,
        'prelim' => $prelim,
        'midterm' => $midterm,
        'final' => $final,
        'average' => $average,
        'letter' => $letter,
        'remarks' => $remarks,
        'award' => $award,
    ]);
});
