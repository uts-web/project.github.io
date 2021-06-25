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

Route::get('', 'HomeController@index')->name('home');
Route::get('/kategori/{id}', 'kategoriController');

Auth::routes();
Route::get('/logout' ,function(){
	$logout=Auth::logout();
	return view('auth.login');
});

Route::post('/updateid', 'kategoriController@updateid');

Route::get('/manage', 'manageController@index')->name('manage');

Route::get('/kategoris/add', 'manageController@add');
Route::get('/komentar/add', 'komentarController@add');
Route::get('/user/add', 'userController@add');

Route::post('/kategori/create', 'manageController@create');
Route::post('/komentar/create', 'komentarController@create');
Route::post('/user/create', 'userController@create');

Route::get('/kategoris/edit/{id}', 'manageController@edit');
Route::get('/komentar/edit/{id}', 'komentarController@edit');
Route::get('/user/edit/{id}', 'userController@edit');

Route::post('/kategoris/update/{id}','manageController@update');
Route::post('/komentar/update/{id}','komentarController@update');
Route::post('/user/update/{id}','userController@update');

Route::get('/kategoris/delete/{id}','manageController@delete');
Route::get('/komentar/delete/{id}','komentarController@delete');
Route::get('/user/delete3/{id}', 'userController@delete3');

Route::get('/kategoris/cetak_pdf', 'manageController@cetak_pdf');
Route::get('/komentar/cetak_pdf', 'komentarController@cetak_pdf');
Route::get('/user/cetak_pdf', 'userController@cetak_pdf');
