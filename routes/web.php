<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

route::get('acuille', function()
{
    return view ('acuille');
});

route::post('inscription.post',[UserController::class, 'store']);
route::post('login.post', [UserController::class, 'login']);
// route::post('aceuille', [UserController::class, '']);