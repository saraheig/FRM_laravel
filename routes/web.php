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

// Ressources 
Route::resource('/test', 'HelloController');

// Utilisation d'un modèle avec un contrôleur et une vue 
// Route::get('/model', 'TasksController@index')->name('model');

// Route::get('/model/{id}', 'TasksController@show')->name('model.show');

Route::resource('model', 'TasksController');
// Ca crée automatiquement toutes les routes pour le contrôleur TasksController

Route::get('/', 'TasksController@index'); // pour dire quelle est la page par défaut 

Route::resource('/tasks', 'TasksView'); // pas d'@index car resource -> toutes les actions 
// car on a besoin de post -> car on crée une nouvelle ressource avec le formulaire
