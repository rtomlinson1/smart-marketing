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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/team', 'App\Http\Controllers\PagesController@team');
Route::get('/website-design', 'App\Http\Controllers\PagesController@web');
Route::get('/website-hosting', 'App\Http\Controllers\PagesController@hosting');
Route::get('/social', 'App\Http\Controllers\PagesController@social');
Route::get('/seo', 'App\Http\Controllers\PagesController@seo');
Route::get('/video', 'App\Http\Controllers\PagesController@video');
Route::get('/design', 'App\Http\Controllers\PagesController@design');
Route::get('/church', 'App\Http\Controllers\PagesController@church');
Route::get('/quote', 'App\Http\Controllers\PagesController@quote');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Route::get('/team', function()){
//   return view('pages.team');
// }
