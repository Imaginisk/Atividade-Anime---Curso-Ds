<?php

use App\Http\Controllers\bandosController;
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

Route::get('/luffy', [bandosController::class, 'mugiwara']);
Route::get('/shanks', [bandosController::class, 'ruivo']);
Route::get('/edward', [bandosController::class, 'barbabranca']);
Route::get('/shichibukai', [bandosController::class, 'shichibukai']);
Route::get('/marinha', [bandosController::class, 'marinha']);
Route::get('/home', [bandosController::class, 'home']);
