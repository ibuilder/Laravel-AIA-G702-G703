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

Auth::routes(['register' => false]);
Route::get('/logout', 'Auth\LoginController@logout');
// Route::post('/login', function(){
//   print_r('entered');exit;
// });

Route::get('/', function(){
  return redirect('/index');
});
//creating aia
Route::post('/createAia','AiaController@createaia');

Route::get('/index','AiaController@index');
//show item list
Route::get('/itemlist','AiaController@itemlist');
//print g702
Route::get('/g702/{item}','AiaController@g702');

Route::get('/g702view','AiaController@g702view');

//print g703
Route::get('/g703/{item}','AiaController@g703');

//print delete item
Route::get('/delete_item/{item}','AiaController@delete_item');
