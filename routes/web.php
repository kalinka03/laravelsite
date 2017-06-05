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

Route::get('/', [
    'as' => 'main',
    'uses' => 'MainController@showMain'
]);
// Route::get('/catalog', [
//     'as' => 'catalog',
//     'uses' => 'CatalogController@showCatalog'
// ]);



Route::get('/catalog/{id?}', [
    'as' => 'catalog',
    'uses' => 'CatalogController@showCategory'
]);
//Route::get('logout', [
//    'as' => 'logout',
//    'uses' => 'LoginController@logout'
//]);




Route::get('/ad/{id?}', [
    'as' => 'ad',
    'uses' => 'AdController@showAd'
]);

Route::get('/create', [
    'as' => 'create',
    'middleware' => 'auth',
    'uses' => 'CreateAdController@createAd'
]);
Route::post('/create', [
    'as' => 'create',
    'middleware' => 'auth',
    'uses' => 'CreateAdController@store'
]);
Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => ['auth','admin'], 'as' => 'admin::', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', [
        'as' => 'admin.main',
        'uses' => function() {
            return view('admin/mainAdmin');
        }
    ]);


    Route::resource('user', 'UserController', [
        'only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']
    ]);
    Route::resource('catalog', 'CatalogController', [
        'only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']
    ]);
    Route::resource('ad', 'AdController', [
        'only' => ['index', 'create', 'store', 'edit', 'update', 'destroy']
    ]);


});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
