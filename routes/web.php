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

Route::get('/', 'PagesController@index')->name('home');

Route::prefix('admin')->group(function(){

Route::get('/dashboard', 'PagesController@dashboard')->name('admin.dashboard');
Route::get('/profile', 'ProfilePageController@index')->name('admin.profile');
Route::put('/main/update', 'MainPagesController@update')->name('admin.main.update');
// services routes
Route::get('/services/create', 'ServicePagesController@create')->name('admin.services.create');
Route::post('/services/create', 'ServicePagesController@store')->name('admin.services.store');
Route::get('/services/list', 'ServicePagesController@list')->name('admin.services.list');
Route::get('/services/edit/{id}', 'ServicePagesController@edit')->name('admin.services.edit');
Route::post('/services/update/{id}', 'ServicePagesController@update')->name('admin.services.update');
Route::delete('/services/destroy/{id}', 'ServicePagesController@destroy')->name('admin.services.destroy');
// portfolio routes
Route::get('/portfolio/create', 'PortfolioPagesController@create')->name('admin.portfolio.create');
Route::put('/portfolio/create', 'PortfolioPagesController@store')->name('admin.portfolio.store');
Route::get('/portfolio/list', 'PortfolioPagesController@list')->name('admin.portfolio.list');
Route::get('/portfolio/edit/{id}', 'PortfolioPagesController@edit')->name('admin.portfolio.edit');
Route::post('/portfolio/update/{id}', 'PortfolioPagesController@update')->name('admin.portfolio.update');
Route::delete('/portfolio/destroy/{id}', 'PortfolioPagesController@destroy')->name('admin.portfolio.destroy');
//about routes
Route::get('/about/profile', 'ProfilePagesController@index')->name('admin.about.profile');
});


Auth::routes();


