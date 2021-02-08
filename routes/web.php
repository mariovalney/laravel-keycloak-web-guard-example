<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@renderWelcome');
Route::get('/public', 'PageController@renderPublic');



Route::middleware('keycloak-web')->get('/gate', 'PageController@renderGate');
Route::middleware('keycloak-web')->get('/private', 'PageController@renderPrivate');

Route::middleware('keycloak-web')->get('/private/examples', 'PageController@renderExamples');
Route::middleware('keycloak-web')->get('/private/examples/{example}', 'PageController@renderExample')->name('example');
