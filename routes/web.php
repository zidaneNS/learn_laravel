<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = [
        [
            "id" => 1,
            "name" => "Programmer",
            "pay" => "10.000",
        ],
        [
            "id" => 2,
            "name" => "Lecturer",
            "pay" => "40.000"
        ]
    ];
    return view('jobs', ["jobs" => $jobs]);
});

Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
            "id" => 1,
            "name" => "Programmer",
            "pay" => "10.000",
        ],
        [
            "id" => 2,
            "name" => "Lecturer",
            "pay" => "40.000"
        ]
    ];

    $job = Arr::first($jobs, fn ($jobs) => $jobs["id"] == $id);
    
    return view('job', ["job" => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});