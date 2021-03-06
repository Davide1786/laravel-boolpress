<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// rotta che gestisce la homepage visibile agli utenti
Route::get('/', 'HomeController@index')->name('index');
Route::resource('/posts', 'PostController');

//Serie di rotte che gestisce tutto il meccanismo di autenticazione
Auth::routes(); 

//Serie di rotte che gestisce il backoffice (che da cosi)
// Route::get('/admin', 'HomeController@index')->name('admin');
// (diventano)
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')
    ->group(function() {
        // pagina di atterraggio dopo il login (cn il prefix, l'url è /admin)
        Route::get('/', 'HomeController@index')->name('index');
        Route::resource('/posts', 'PostController');
        Route::resource('/categories', 'CategoryController');
    });
