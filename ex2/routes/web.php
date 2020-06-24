<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'OminiController@index')->name("home");
Route::get('/mostraOmini/{id}', 'OminiController@show')->name("mostraOmini");

//creo omino

Route::get('/creaOmino', 'OminiController@create')->name("creaOmino");

Route::post('/storeOmino', 'OminiController@store')->name("storeOmino");

// modifico omino

Route::get('/modificaOmino/{id}', 'OminiController@edit')->name("modificaOmino");

// aggiorno omino

Route::post('/aggiornaOmino/{id}', 'OminiController@update')->name("aggiornaOmino");

// elimina

Route::get('/eliminaOmino/{id}', 'OminiController@destroy')->name("eliminaOmino");
