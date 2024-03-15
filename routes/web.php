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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/solutions', function () {
    return view('solution');
});
Route::get('/contactez', function () {
    return view('contactez');
});
Route::get('/aeronautique', function () {
    return view('aeronautique');
});
Route::get('/automobile', function () {
    return view('automobile');
});
Route::get('/assurance', function () {
    return view('assurance');
});
Route::get('/banque', function () {
    return view('banque');
});
Route::get('/distrubition', function () {
    return view('distrubition');
});
Route::get('/expertise', function () {
    return view('expertise');
});
Route::get('/gestion', function () {
    return view('gestion');
});
Route::get('/a-propos', function () {
    return view('audit');
});
Route::get('/organisations', function () {
    return view('organisations');
});
Route::get('/transition', function () {
    return view('transition');
});
Route::get('/technologie', function () {
    return view('technologie');
});
Route::get('/culture', function () {
    return view('culture');
});
Route::get('/transparence', function () {
    return view('transparence');
});
Route::get('/creation', function () {
    return view('creation');
});
Route::get('/transformation', function () {
    return view('transformation');
});
Route::get('/energie', function () {
    return view('energie');
});
Route::get('/hotelle', function () {
    return view('hotelle');
});
Route::get('/industrie', function () {
    return view('industrie');
});
Route::get('/ingenerie', function () {
    return view('ingenerie');
});
Route::get('/media', function () {
    return view('media');
});
Route::get('/telecommunication', function () {
    return view('telecommunication');
});
Route::get('/techonologieservice', function () {
    return view('techonologieservice');
});
Route::get('/transaction', function () {
    return view('transaction');
});
Route::get('/croissance', function () {
    return view('croissance');
});
Route::get('/startups', function () {
    return view('startups');
});
