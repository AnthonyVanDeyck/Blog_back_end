<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;

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

// route::get('article', function()
// {
//     return view ('article');
// })->name('article');

route::get('acceuil', [UserController::class, 'login'])->name('accueil')->middleware('auth');
route::post('inscription.post',[UserController::class, 'store']);
route::post('login.post', [UserController::class, 'login']);
route::post('article.post', [ArticleController::class, 'article']);
route::get('article', [ArticleController::class, 'look'])->name('article');


/////////////POUR API
route::get('/test/article', [ArticleController::class, 'reviuw']);
route::get('/test/user', [UserController::class, 'reviuw']);
route::get('/test/commentaire', [CommentaireController::class, 'reviuw']);
route::get('/test/article2', [ArticleController::class, 'reviuw2']);
route::get('/test/user2', [UserController::class, 'reviuw2']);
route::get('/test/commentaire2', [CommentaireController::class, 'reviuw2']);
route::get('/test/commentaire3', [CommentaireController::class, 'reviuw3']);