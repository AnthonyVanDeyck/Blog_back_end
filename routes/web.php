<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

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

route::get('inscription', function()
{
    return view('inscription');
});

// route::get('acceuil', function()
// {
//     return view ('acceuil');
// })->name('accueil');

route::get('acceuil', [UserController::class, 'login'])->name('accueil')->middleware('auth');
route::post('inscription.post',[UserController::class, 'store']);
route::post('login.post', [UserController::class, 'login']);
route::post('article.post', [ArticleController::class, 'store']);
route::get('article', [ArticleController::class, 'show']);