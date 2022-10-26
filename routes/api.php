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

route::get('/test/article', [ArticleController::class, 'reviuw']); // tout les articles
route::get('/test/user', [UserController::class, 'reviuw']); // tout les utilisateurs
route::get('/test/commentaire', [CommentaireController::class, 'reviuw']); // tout les commentaires
route::get('/test/article2', [ArticleController::class, 'reviuw2']);// article par user
route::get('/test/commentaire2', [CommentaireController::class, 'reviuw2']);//commentaire par user
route::get('/test/commentaire3', [CommentaireController::class, 'reviuw3']);//commentaire par aticle