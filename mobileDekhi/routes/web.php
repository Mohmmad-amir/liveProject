<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
//     return view('auth.login');
// });
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/addProduct', function () {
    return view('layouts.addProduct');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function () {
    // main carousel start
    Route::get('mainCarousel/add', 'MainCarouselController@create')->name('mainCarousel.add');
    Route::post('mainCarousel/add', 'MainCarouselController@store')->name('mainCarousel.store');
    Route::get('/mainCarousel/{id}edit', 'MainCarouselController@edit')->name('mainCarousel.edit');
    Route::put('/mainCarousel/{id}', 'MainCarouselController@update')->name('mainCarousel.update');
    Route::delete('/mainCarousel/{id}', 'MainCarouselController@destroy')->name('mainCarousel.destroy');
    // main carousel end
    //
    // sub carousel start
    Route::get('subCarousel/add', 'SubCarouselController@create')->name('subCarousel.add');
    Route::post('subCarousel/add', 'SubCarouselController@store')->name('subCarousel.store');
    Route::get('/subCarousel/{id}edit', 'SubCarouselController@edit')->name('subCarousel.edit');
    Route::put('/subCarousel/{id}', 'SubCarouselController@update')->name('subCarousel.update');
    Route::delete('/subCarousel/{id}', 'SubCarouselController@destroy')->name('subCarousel.destroy');
    // sub carousel end

});
