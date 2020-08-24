<?php

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
    return view('welcome');
});
Route::get('/test', function () {
    return "Hola mundo";
});
Route::get('/hola/{nombre?}', function ($nombre ="juan") {
    return "Hola mundo $nombre <a href='".route("nosotros")."'>nosotros</a> ";
});
Route::get('/nosotros', function () {
    return "<h1> Toda la información sobre sonostros</h1> ";
})->name("nosotros");