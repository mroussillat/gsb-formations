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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'formation', 'middleware' => 'auth'], function ()
{
    Route::get('/list', 'FormationController@index');

    Route::get('/coming', 'FormationController@coming');

    Route::get('/show/{id}', 'FormationController@show')->where('id', '[0-9]+');

    Route::get('/apply/{id}', 'FormationController@apply')->where('id', '[0-9]+');
    Route::get('/cancel/{id}', 'FormationController@cancel')->where('id', '[0-9]+');

    Route::get('edit/{id}', 'FormationController@edit')->where('id', '[0-9]+');
    Route::post('edit/{id}', 'FormationController@edit_store')->where('id', '[0-9]+');

    Route::get('add', 'FormationController@add');
    Route::post('add', 'FormationController@add_store');

    Route::get('delete/{id}', 'FormationController@delete');
});

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function ()
{
    Route::get('/', 'UserController@index');

    Route::get('edit/{id}', 'UserController@show')->where('id','[0-9]+');
    Route::post('edit/{id}', 'UserController@edit')->where('id','[0-9]+');

    Route::get('add', 'UserController@add');
    Route::post('add', 'UserController@add_store');

    Route::get('delete/{id}', 'UserController@delete');
});

Route::group(['prefix' => 'specialty', 'middleware' => 'auth'], function ()
{
    Route::get('/', 'SpecialtyController@index');
    Route::post('/', 'SpecialtyController@add');

    Route::get('edit/{id}', 'SpecialtyController@show')->where('id','[0-9]+');
    Route::post('edit/{id}', 'SpecialtyController@edit')->where('id','[0-9]+');

    Route::get('delete/{id}', 'SpecialtyController@delete');
});

Route::group(['prefix' => 'session', 'middleware' => 'auth'], function ()
{
    Route::get('/', 'SessionController@index');
    Route::post('/', 'SessionController@add');

    Route::get('edit/{id}', 'SessionController@show')->where('id','[0-9]+');
    Route::post('edit/{id}', 'SessionController@edit')->where('id','[0-9]+');

    Route::get('delete/{id}', 'SessionController@delete');
});
