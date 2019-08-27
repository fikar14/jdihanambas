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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blogs', 'BlogController');

Route::group(['prefix' => 'manage',  'middleware' => ['role:SuperAdministrator']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController')->except([
        'create'
    ]);
    Route::resource('permissions', 'PermissionController')->except([
        'edit', 'show', 'update'
    ]);
});

Route::resource('profile', 'ProfileController');
Route::resource('contact', 'ContactController');
Route::resource('produk-hukum', 'ProkumController');
