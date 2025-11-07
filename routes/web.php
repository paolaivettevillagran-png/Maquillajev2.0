<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});

Route::get('/contacto', function () {
  return view('contacto');
});

Route::get('/galeria', function () {
  return view('galeria');
});

Route::get('/quienessomos', function () {
  return view('quienessomos');
});
