<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', 'DashboardController@index');

Route::get('/rpp', 'RppController@index');
Route::post('/rpp_create','RppController@create')->name('rpp_create');
Route::get('/rpp_edit/{id}', 'RppController@edit')->name('rpp_edit');
Route::post('/rpp_update/{id}','RppController@update')->name('rpp_update');
Route::get('/rpp_delete/{id}','RppController@destroy')->name('rpp_delete');


Route::get('/jadwal', 'JadwalController@index');
Route::post('/jadwal_create','JadwalController@create')->name('jadwal_create');
Route::get('/jadwal_edit/{id}', 'JadwalController@edit')->name('jadwal_edit');
Route::post('/jadwal_update/{id}','JadwalController@update')->name('jadwal_update');
Route::get('/jadwal_delete/{id}','JadwalController@destroy')->name('jadwal_delete');

Route::get('/nilai', 'NilaiController@index');
Route::post('/nilai_create','NilaiController@create')->name('nilai_create');
Route::get('/nilai_edit/{id}', 'NilaiController@edit')->name('nilai_edit');
Route::post('/nilai_update/{id}','NilaiController@update')->name('nilai_update');
Route::get('/nilai_delete/{id}','NilaiController@destroy')->name('nilai_delete');


Route::get('/supervisor', 'SupervisorController@index');
Route::post('/supervisor_create','SupervisorController@create')->name('supervisor_create');
Route::get('/supervisor_edit/{id}', 'SupervisorController@edit')->name('supervisor_edit');
Route::post('/supervisor_update/{id}','SupervisorController@update')->name('supervisor_update');
Route::get('/supervisor_delete/{id}','SupervisorController@destroy')->name('supervisor_delete');

Route::get('/laporan', 'LaporanController@index');
Route::get('/laporan/cetak_pdf', 'LaporanController@cetak_pdf')->name('generate');

Route::get('/laporan', 'LaporanController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


