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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('index');
});
  
Route::get('add_contact', 'ContactController@AddContact'); 

Route::get('all_contact', 'ContactController@AllContact')->name('all.contact');

Route::post('insert-contact', 'ContactController@InsertContact'); 

Route::get('delete-contact/{id}', 'ContactController@DeleteContact');
Route::get('show-contact/{id}', 'ContactController@ShowContact'); 
Route::get('edit-contact/{id}', 'ContactController@EditContact'); 
Route::post('update-contact/{id}', 'ContactController@UpdateContact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
