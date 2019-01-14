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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/bigkubo', function () {
    return view('bigkubo');
});
Route::get('/dormitory', function () {
    return view('dormitory');
});
Route::get('/smallkubo', function () {
    return view('smallkubo');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::post('/booking/summary', 'BookingsController@submit');

/* For testing codes */
Route::get('/test',function(){
    return view('inc.test');
});
