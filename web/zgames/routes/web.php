<?php

use Illuminate\Support\Facades\Route;



Route::view("/","home")->name("home");

Route::view("/mediciones_existentes", "mediciones_existentes")->name("mediciones_existentes");


 