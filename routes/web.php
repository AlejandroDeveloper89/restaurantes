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

Route::get('/', function() {
    return Redirect::to('/restaurante', 302); 
})->name('restaurantes');


Route::resource('/restaurante', 'RestauranteController');
Route::resource('/comentario', 'ComentarioController');


// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AdminLoginController@login')->name('admin.login.check');
    Route::post('/logout', 'AdminLoginController@logout')->name('admin.logout');
    // Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/comentarios', 'AdminController@comentarios')->name('admin.comentarios');
    Route::put('/aprobar/{comentario}', 'AdminController@aprobar')->name('admin.aprobar');
    Route::get('/restaurante', 'AdminController@restaurante')->name('admin.restaurante');
    Route::post('/restaurante', 'AdminController@restauranteStore')->name('admin.restaurante.store');
});