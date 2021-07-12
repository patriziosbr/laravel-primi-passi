<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $navLinks = [
        "links" => [
            "home",
            "contacts",
            "services",
            "news"
        ]
    ];
    return view('home', $navLinks );
});

Route::get('/home', function () {

    $navLinks = [
        "links" => [
            "home",
            "contacts",
            "services",
            "news"
        ]
    ];
    return view('home', $navLinks );
});

Route::get('/contacts', function () {
    $navLinks = [
        "links" => [
            "home",
            "contacts",
            "services",
            "news"
        ]
    ];
    return view('contacts', $navLinks);
});

Route::get('/services', function () {
    $navLinks = [
        "links" => [
            "home",
            "contacts",
            "services",
            "news"
        ]
    ];
    return view('services', $navLinks);
});

Route::get('/news', function () {
    $navLinks = [
        "links" => [
            "home",
            "contacts",
            "services",
            "news"
        ]
    ];
    return view('news', $navLinks);
});
