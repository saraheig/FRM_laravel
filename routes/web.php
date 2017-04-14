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

// Default route 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo 'Hello World';
});

Route::get('/hello/{id}', function ( $id ) {
    echo 'Hello ' . $id;
});

// Utilisation d'une vue (sans contrôleur)
Route::get('/hi/{param}', function ( $paramuser ) {
    return view('hi')->with('prenom', $paramuser);
});

// Utilisation d'un contrôleur (sans vue)
Route::get('/controller', 'HelloController@index');

// Utilisation d'un contrôleur pour afficher une vue 
Route::get('/controllervue', 'HelloControllerView@index');
