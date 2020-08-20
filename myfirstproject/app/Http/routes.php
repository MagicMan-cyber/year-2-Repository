<?php

Route::get('/', function()
{
    return view('home');
});

Route::get('/', function()
{
    return view('resume');
});

Route::resource('/', 'HomeController');

