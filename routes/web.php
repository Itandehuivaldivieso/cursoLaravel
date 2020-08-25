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
use Illuminate\Support\Facades\Route; 

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/test', function () {
    return "Hola mundo";
});
Route::get('/hola/{nombre?}', function ($nombre ="juan") {
    return "Hola mundo $nombre <a href='".route("nosotros")."'>nosotros</a> ";
});
Route::get('/nosotros-en-la-web', function () {
    return "<h1> Toda la información sobre sonostros</h1> ";
})->name("nosotros");

Route::get('home/{nombre?}/{apellido?}', function ($nombre= "Pepe", $apellido = "kho") {
    $posts = ["post1", "post2", "post3", "post4"];
    $posts2 = [];
    return view("home",['nombre' => 'Victoria', 'apellido' => 'Mujica', 'posts'=> $posts, 'posts2'=> $posts2]);
})->name("home");*/

Route::get('post','PostController@index');