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

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('blogs', 'BlogController');
Route::resource('blog-categories', 'BlogCategoryController');

Route::group(['prefix' => 'manage',  'middleware' => ['role:SuperAdministrator']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController')->except([
        'create'
        ]);
        Route::resource('permissions', 'PermissionController')->except([
            'edit', 'show', 'update'
            ]);
        });

Route::group(['prefix' => 'manage', 'middleware' => ['role:SuperAdministrator, Administrator']], function() {
    Route::resource('contact', 'ContactController');
    Route::resource('profile', 'ProfileController'); 
});

//Produk Hukum Desa
Route::resource('produkhukum', 'ProkumController');
Route::get('produkhukum.search', 'ProkumController@index')->name('prokum.search');
Route::get('produk-hukum-desa', 'ProkumController@prokumde')->name('prokumde');

//Produk Hukum Daerah
Route::resource('produk-hukum-daerah', 'ProkumDaerahController');
Route::get('produk-hukum-daerah.search', 'ProkumDaerahController@search')->name('search');
Route::get('produk-hukum', 'ProkumDaerahController@prokumda')->name('prokumda');

//Page
Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/profile', 'PageController@profile')->name('profile');
Route::get('/berita', 'PageController@berita')->name('berita');
Route::get('/kontak', 'PageController@kontak')->name('kontak');
Route::get('/sejarah-jdih', 'PageController@sejarahjdih')->name('sejarahjdih');
Route::get('/sumber-hukum', 'PageController@sumberhukum')->name('sumberhukum');
Route::get('/sop', 'PageController@sop')->name('sop');

// Route::get('/produk-hukum/search', 'PageController@search');
// Route::get('/produk-hukum', 'PageController@prokum')->name('produk-hukum');