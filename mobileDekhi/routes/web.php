<?php

use Illuminate\Routing\Router;
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
// Route::get('/', function () {
//     return view('frontEnd/FEhome');
// });

//Home Controller
Route::get('/','HomeController@mainCarosul')->name('mainCarosul');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/details/{id}','HomeController@details')->name('details');
Route::get('/search','HomeController@search')->name('search');

//Brand Controller
Route::get('/brand/{brand}','BrandController@show')->name('brand');

//filterController
Route::get('/filter','filterController@index')->name('filter.index');
Route::get('/filter/{id}/details','filterController@show')->name('filterDetails.show');

Auth::routes();
// // Route::get('/addProduct', function () {
// //     return view('layouts.addProduct');
// // });



Route::middleware('auth')->group(function () {
    // main carousel start
    Route::get('mainCarousel/add', 'MainCarouselController@create')->name('mainCarousel.add');
    Route::post('mainCarousel/add', 'MainCarouselController@store')->name('mainCarousel.store');
    Route::get('/mainCarousel/{id}/edit', 'MainCarouselController@edit')->name('mainCarousel.edit');
    Route::put('/mainCarousel/{id}', 'MainCarouselController@update')->name('mainCarousel.update');
    Route::delete('/mainCarousel/{id}', 'MainCarouselController@destroy')->name('mainCarousel.destroy');
    // main carousel end
    //
    // sub carousel start
    Route::get('subCarousel/add', 'SubCarouselController@create')->name('subCarousel.add');
    Route::post('subCarousel/add', 'SubCarouselController@store')->name('subCarousel.store');
    Route::get('/subCarousel/{id}/edit', 'SubCarouselController@edit')->name('subCarousel.edit');
    Route::put('/subCarousel/{id}', 'SubCarouselController@update')->name('subCarousel.update');
    Route::delete('/subCarousel/{id}', 'SubCarouselController@destroy')->name('subCarousel.destroy');
    // sub carousel end
    // add product start
    Route::get('/products', 'ProductController@index')->name('products.all');
    Route::get('products/add', 'ProductController@create')->name('products.add');
    Route::post('products/add', 'ProductController@store')->name('products.store');
    Route::get('/products/{id}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('/products/{id}', 'ProductController@update')->name('products.update');
    Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
    // add product end
    // add upcoming product start
    Route::get('upcomingProducts/add','UpcomingproductController@create')->name('upcomingProduct.add');
    Route::post('upcomingProducts/add','UpcomingproductController@store')->name('upcomingProduct.store');
    Route::get('upcomingProducts/{id}/edit','UpcomingproductController@edit')->name('upcomingProduct.edit');
    Route::put('upcomingProducts/{id}', 'UpcomingproductController@update')->name('upcomingProduct.update');
    Route::delete('upcomingProducts/{id}', 'UpcomingproductController@destroy')->name('upcomingProduct.destroy');
    // add upcoming product start
    //

});
