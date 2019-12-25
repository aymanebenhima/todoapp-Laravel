<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/new', function () {
//     return view('new');
// });

Route::get('/new', [
    'uses' => 'PagesController@new'
]);

Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as'   => 'todos'
]);

Route::post('/create/todo', [

    'uses' => 'TodosController@store'
]);

Route::get('/todo/delete/{id}', [

    'uses' => 'TodosController@delete',
    'as'   => 'todo.delete'
]);

Route::get('/todo/update/{id}', [

    'uses' => 'TodosController@update',
    'as'   => 'todo.update'
]);

Route::post('/todos/save/{id}', [

    'uses' => 'TodosController@save',
    'as'   => 'todos.save'
]);

Route::get('/todos/completed/{id}', [

    'uses' => 'TodosController@completed',
    'as'   => 'todos.completed'
]);