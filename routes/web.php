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

 Route::get('/insert',function(){
  return view('insert');
 });

 Route::POST('/insert', 'InsertController@insert'
  );



// Route::get('/p/create', 'InsertController@insert');
// Route::post('/p', 'InsertController@insert');

// Route::get('/{insert}', 'InsertController@insert')->name('insert');