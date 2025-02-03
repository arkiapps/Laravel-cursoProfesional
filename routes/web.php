<?php


use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::view(); //
// Route::get('mi/ruta', ControlladorDeLaRuta);
// Route::post('mi/ruta', ControlladorDeLaRuta);
// Route::put('mi/ruta', ControlladorDeLaRuta);
// Route::delete('mi/ruta', ControlladorDeLaRuta);

Route::view('/', 'index')->name('index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')-> name('contact');