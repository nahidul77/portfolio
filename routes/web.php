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

Route::get('/', 'PagesController@index')->name('index');

Route::prefix('admin')->group(function(){

Route::get('/dashboard', 'DashboardController@dashboard')->name('admin.dashboard');
//site routes
Route::get('/site', 'SitePageController@index')->name('admin.site');
Route::post('/site/store', 'SitePageController@store')->name('admin.site.store');
Route::post('/site/update', 'SitePageController@update')->name('admin.site.update');
//profile routes
Route::get('/profile', 'ProfilePageController@index')->name('admin.profile');
Route::post('/profile/store', 'ProfilePageController@store')->name('admin.profile.store');
Route::post('/profile/update', 'ProfilePageController@update')->name('admin.profile.update');
// services routes
Route::get('/service/add', 'ServicePageController@create')->name('admin.service.create');
Route::post('/service/store', 'ServicePageController@store')->name('admin.service.store');
Route::get('/service/list', 'ServicePageController@list')->name('admin.service.list');
Route::get('/service/edit/{id}', 'ServicePageController@edit')->name('admin.service.edit');
Route::post('/service/update/{id}', 'ServicePageController@update')->name('admin.service.update');
Route::delete('/service/destroy/{id}', 'ServicePageController@destroy')->name('admin.service.destroy');
// portfolio routes
Route::get('/portfolio/add', 'PortfolioPageController@create')->name('admin.portfolio.create');
Route::post('/portfolio/create', 'PortfolioPageController@store')->name('admin.portfolio.store');
Route::get('/portfolio/list', 'PortfolioPageController@list')->name('admin.portfolio.list');
Route::get('/portfolio/edit/{id}', 'PortfolioPageController@edit')->name('admin.portfolio.edit');
Route::post('/portfolio/update/{id}', 'PortfolioPageController@update')->name('admin.portfolio.update');
Route::delete('/portfolio/destroy/{id}', 'PortfolioPageController@destroy')->name('admin.portfolio.destroy');
// skill routes
Route::get('/skill/add', 'SkillPageController@create')->name('admin.skill.create');
Route::post('/skill/create', 'SkillPageController@store')->name('admin.skill.store');
Route::get('/skill/list', 'SkillPageController@list')->name('admin.skill.list');
Route::get('/skill/edit/{id}', 'SkillPageController@edit')->name('admin.skill.edit');
Route::post('/skill/update/{id}', 'SkillPageController@update')->name('admin.skill.update');
Route::delete('/skill/destroy/{id}', 'SkillPageController@destroy')->name('admin.skill.destroy');
//contact routes
Route::get('/contact', 'ContactPageController@index')->name('admin.contact');
Route::post('/contact/store', 'ContactPageController@store')->name('admin.contact.store');
Route::post('/contact/update', 'ContactPageController@update')->name('admin.contact.update');
});

Route::post('/contact', 'ContactFormController@store')->name('contact.store');



Auth::routes([
    'login'    => true, 
    'logout'   => true, 
    'register' => true,
    'reset'    => true,   // for resetting passwords
    'confirm'  => true,  // for additional password confirmations
    'verify'   => true,  // for email verification
]
);

Route::get('/home', 'HomeController@index')->name('home');

