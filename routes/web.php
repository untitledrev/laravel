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
/*
Route::get('/', function () {
   // dd([1, 2, 3, 4, 5, [1, 2, 3]]);
    return view('welcome');
});
*/

/*
Route::get('names', 'NamesController@index');
Route::get('names/{id}', 'NamesController@show');
Route::get('create', 'NamesController@create');
Route::get('posts', 'PostsController@create');
Route::get('postsdel', 'PostsController@deleteLast');
*/
/*
Route::get('tasks_list', 'dz_4_laravel@tasks_list');

Route::get('tasks{id}', 'dz_4_laravel@tasks');
Route::get('/', 'dz_4_laravel@index');
Route::get('and_work', 'dz_4_laravel@and_work');

*/

//Route::get('/test', 'UserController_yr5@index');

Route::get('places', 'dz_5_laravel@places');

Route::any('places/create', 'dz_5_laravel@create');
Route::post('places/create', 'dz_5_laravel@create_and');
Route::get('places/{id}/', 'dz_5_laravel@place');
Route::any('/places/{id}/photos/add', 'dz_5_laravel@photo');
Route::post('/places/{id}/photos/add', 'dz_5_laravel@photo_and');




