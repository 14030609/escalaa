<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function ()
{
    return view('welcome');
});

Route::get('/login', function ()
{
    return view('pages.login');
});

Route::get('/inventarios', function ()
{
    return view('layout.body');
});

Route::get('/tabla/{id}', function ()
{
	return view('layout.table');
})->middleware('auth')->name('ruta-de-tablas');
