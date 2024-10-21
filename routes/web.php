<?php


use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Metodos estaticos
Route::view('/', 'welcome')->name('welcome');
//Route.view('/', 'welcome').name('welcome');

// Route::view(); //
// Route::get('mi/ruta', ControlladorDeLaRuta);
// Route::post('mi/ruta', ControlladorDeLaRuta);
// Route::put('mi/ruta', ControlladorDeLaRuta);
// Route::delete('mi/ruta', ControlladorDeLaRuta);