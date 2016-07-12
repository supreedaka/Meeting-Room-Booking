<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('issues/create', function () {
    return view('issues.create');
});

Route::get('issues/edit', function () {
    return view('issues.edit');
});

Route::get('issues/vote', function () {
    return view('issues.vote');
});
