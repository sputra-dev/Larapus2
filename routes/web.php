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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'GuestController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    //isi route
    Route::resource('authors','AuthorController');
    Route::resource('books', 'BookController');
});

Route::get('books/{book}/borrow', [
'middleware' => ['auth', 'role:member'],
'as' => 'guest.books.borrow',
'uses' => 'BookController@borrow'
]);

Route::put('books/{book}/return', [
'middleware' => ['auth', 'role:member'],
'as' => 'member.books.return',
'uses' => 'BookController@returnBack'
]);
