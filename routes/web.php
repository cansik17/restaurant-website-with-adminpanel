<?php

use Illuminate\Support\Facades\Route;
//use RealRashid\SweetAlert\Facades\Alert;



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
// front routes

Route::get('/', 'Front\HomepageController@index')->name('home');
Route::get('/menu', 'Front\MenuController@index')->name('menu');
Route::get('/about', 'Front\AboutController@index')->name('about');
Route::get('/gallery', 'Front\GalleryController@index')->name('gallery');
Route::get('/contact', 'Front\ContactController@index')->name('contact');
Route::post('/contact', 'Front\ContactController@mail')->name('contact.mail');

// back routes

Route::get('/dashboard', 'Back\DashboardController@index')->name('dashboard.index')->middleware('auth');

Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::get('sliders', 'SliderController@index')->name('sliders.index');

   Route::get('sliders/{id}/edit', 'SliderController@edit')->name('sliders.edit');
   Route::put('sliders/{id}', 'SliderController@update')->name('sliders.update');
});
Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::resource('menu', 'MenuController')->except([
         'show'
    ]);
   
});
Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::get('about', 'AboutController@index')->name('about.index');

   Route::get('about/{id}/edit', 'AboutController@edit')->name('about.edit');
   Route::put('about/{id}', 'AboutController@update')->name('about.update');
});
Route::prefix('dashboard')->name('dashboard.')->namespace('Back')->middleware('auth')->group(function () {
    Route::resource('gallery', 'GalleryController')->except([
        'edit', 'show', 'update'
    ]);
   
});

Route::prefix('dashboard')->name('dashboard.')->middleware('auth')->namespace('Back')->group(function () {
    Route::get('/settings','SettingsController@index')->name('settings.index');
  Route::post('/settings/update','SettingsController@update')->name('settings.update');
});

Auth::routes(['register' => false]);
Route::get('logout', 'Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index')->name('home');
