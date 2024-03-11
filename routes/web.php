<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Redirect root URL to the "about" page
Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/contact', 'ContactController@index')->name('contact');