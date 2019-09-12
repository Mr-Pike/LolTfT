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

// Default.
Route::get('/', 'DefaultController@index');

// Champions.
Route::get('champions', ['uses' => 'ChampionController@index', 'as' => 'champions.index']);
Route::get('champions/statistiques', ['uses' => 'ChampionController@stats', 'as' => 'champions.stats']);
Route::post('champions/statistiques/{levelId}', ['uses' => 'ChampionController@dataStats', 'as' => 'champions.dataStats'])->where('levelId', '[0-9]+');;

Route::get('items', ['uses' => 'ItemController@index', 'as' => 'items.index']);
