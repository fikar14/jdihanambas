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
    Route::resource('profile', 'ProfileController');
    Route::resource('contact', 'ContactController');
});

Route::resource('produkhukum', 'ProkumController');

Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/berita', 'PageController@berita')->name('berita');
Route::get('/kontak', 'PageController@kontak')->name('kontak');

// Route::get('/produk-hukum/search', 'PageController@search');
Route::get('/produk-hukum', 'PageController@prokum')->name('produk-hukum');
