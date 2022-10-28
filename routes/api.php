<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::get('/api_get/all_article', [ArticleController::class, 'get_all_article']); // tout les articles
route::get('/api_get/article_by_user', [ArticleController::class, 'get_article_by_user']);// article par user
route::get('/api_get/all_user', [UserController::class, 'get_all_user']); // tout les utilisateurs
route::get('/api_get/all_commentaire', [CommentaireController::class, 'get_all_commentaire']); // tout les commentaires
route::get('/api_get/commentaire_by_user', [CommentaireController::class, 'get_commentaire_by_user']);//commentaire par user
route::get('/api_get/commentaire_by_article', [CommentaireController::class, 'get_commentaire_by_article']);//commentaire par aticle