<?php

use Illuminate\Support\Facades\Route;



Route::get('/', "CagnolinoController@index")->name("home");
Route::get('/mostracagnolino/{id}', "CagnolinoController@show_cagnolino")->name("mostracagnolino");
