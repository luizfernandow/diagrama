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


Route::get('/xml', function () {
	
});


Auth::routes(['register' => false]);

Route::resource('projects', 'ProjectController');
Route::get('/projects/{project}/xml', 'ProjectController@xml')->name('projects.xml');
Route::get('/journals', 'JournalController@index')->name('journals.index');
Route::post('/journals', 'JournalController@update')->name('journals.update');

// This should be the last rule, i.e., if the home rule does not match, the page does not exist
Route::get('/{page}', 'HomeController@index')->where('page', '(?:home)?')->name('home');
