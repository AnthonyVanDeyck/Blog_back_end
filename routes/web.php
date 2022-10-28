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
route::get('/api_get/all_article', [ArticleController::class, 'get_all_article']); // tout les articles
route::get('/api_get/article_by_user', [ArticleController::class, 'get_article_by_user']);// article par user
route::get('/api_get/all_user', [UserController::class, 'get_all_user']); // tout les utilisateurs
route::get('/api_get/all_commentaire', [CommentaireController::class, 'get_all_commentaire']); // tout les commentaires
route::get('/api_get/commentaire_by_user', [CommentaireController::class, 'get_commentaire_by_user']);//commentaire par user
route::get('/api_get/commentaire_by_article', [CommentaireController::class, 'get_commentaire_by_article']);//commentaire par aticle