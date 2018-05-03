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
    return view('login');
});

Route::get('/adminlibrary','PageController@adminlibrary')->name('adminlibrary');
Route::get('/userlibrary','PageController@userlibrary')->name('userlibrary');
Route::get('/denda','PageController@denda')->name('denda');
Route::get('/koleksi','PageController@koleksi')->name('koleksi');
Route::get('/loanprogress','PageController@loanprogress')->name('loanprogress');
Route::get('/loanrequser','PageController@loanrequser')->name('loanrequser');
Route::get('/loanhistory','PageController@loanhistory')->name('loanhistory');
Route::get('/pustakawan','PageController@pustakawan')->name('pustakawan');
Route::get('/addkoleksi','PageController@addkoleksi')->name('addkoleksi');
Route::get('/bookdetails','PageController@bookdetails')->name('bookdetails');
Route::get('/loanlist','PageController@loanlist')->name('loanlist');
Route::get('/loanreq','PageController@loanreq')->name('loanreq');