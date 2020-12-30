<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Agent\DashboardController;
use App\Http\Controllers\Agent\CategoryController;

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

/*
|--------------------------------------------------------------------------
| ユーザー
|--------------------------------------------------------------------------
*/
Route::domain(config('myapp.domain'))->name('user.')->group(function () {

    // TOP
    Route::get('/', [HomeController::class, 'show'])
        ->name('home');

});

/*
|--------------------------------------------------------------------------
| 全権
|--------------------------------------------------------------------------
*/
Route::domain('agent.' . config('myapp.domain'))->name('agent.')->group(function () {

    // ダッシュボード
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('category', CategoryController::class);
});
