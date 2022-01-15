<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MisiController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\VideoController;

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
//     return view('welcome');
// });


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\User@index')->name('dashboard');
//gallery
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gallery/destroy/{id}', 'App\Http\Controllers\GalleryController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/gallery/edit/{id}', 'App\Http\Controllers\GalleryController@edit');
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/gallery', GalleryController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/gallery/update', 'App\Http\Controllers\GalleryController@update');
//gallery videos
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/videos/destroy/{id}', 'App\Http\Controllers\VideoController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/videos/edit/{id}', 'App\Http\Controllers\VideoController@edit');
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/videos', VideoController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/videos/update', 'App\Http\Controllers\VideoController@update');
//blog
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/blog/destroy/{id}', 'App\Http\Controllers\BlogController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/blog', BlogController::class);
//home
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/home', HomeController::class);
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/home/update', 'App\Http\Controllers\HomeController@update');
//portfolio
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/portfolio', PortfolioController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/portfolio/destroy/{id}', 'App\Http\Controllers\PortfolioController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/portfolio/edit/{id}', 'App\Http\Controllers\PortfolioController@edit');
//customer
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/customer', CustomerController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/customer/destroy/{id}', 'App\Http\Controllers\CustomerController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/customer/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
//about
Route::middleware(['auth:sanctum', 'verified'])->resource('/dashboard/about', AboutController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/about/destroy/{id}', 'App\Http\Controllers\AboutController@destroy');
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/about/ubah/{id}', 'App\Http\Controllers\AboutController@ubah');
//profile

Route::middleware(['auth:sanctum', 'verified'])->resource('dashboard/misi', MisiController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/misi/edit/{id}', 'App\Http\Controllers\MisiController@edit');
Route::middleware(['auth:sanctum', 'verified'])->post('dashboard/misi/update', 'App\Http\Controllers\MisiController@update');
// frontend
Route::get('/','App\Http\Controllers\FrontendController@index');
//Route::get('App\Http\Controllers\FrontendController@index_footer');
Route::any('(:any)', 'App\Http\Controllers\FrontendController@index_footer');

Route::get('gallery','App\Http\Controllers\GalleryController@index_fr');
Route::get('gallery/videos','App\Http\Controllers\VideoController@index_fr');
Route::get('/blog','App\Http\Controllers\BlogController@index_fr');
Route::get('blog/{blog:title}', 'App\Http\Controllers\BlogController@show');

Route::get('portfolio', 'App\Http\Controllers\PortfolioController@index_fr');
Route::get('profile', 'App\Http\Controllers\MisiController@index_fr');
//Route::get('/','App\Http\Controllers\HomeController@index_home_blog');
Route::get('/contact', 'App\Http\Controllers\Contact@index');
Route::post('/contact/send', 'App\Http\Controllers\Contact@store');

