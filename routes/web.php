<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::prefix('admin')->group(function () {
    Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
});
Route::middleware([
    'auth:admin',
    'verified',
])->prefix('admin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('member')->group(function () {
    Route::get('/', [App\Http\Controllers\Member\DashboardController::class,'index'])->name('member.dashboard');    
    Route::get('mock', [App\Http\Controllers\Member\MockController::class,'index'])->name('member.mock.index');
    Route::get('mock/pirls', [App\Http\Controllers\Member\Mock\PirlsController::class,'index'])->name('member.pirls.index');

});


// Route::group([
//     'prefix' => '/admin',
//     'middleware' => [
//         'auth:sanctum',
//         config('jetstream.auth_session'),
//         'verified',
//         'role:admin'
//     ]
// ], function () {
//     Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
//     Route::resource('configs', App\Http\Controllers\Admin\ConfigController::class)->names('admin.configs');
// });

Route::get('pickleball/score_board', [App\Http\Controllers\PickleballController::class,'scoreBoard'])->name('pickleball.scoreBoard');
Route::get('pickleball/mcq', [App\Http\Controllers\PickleballController::class,'mcq'])->name('pickleball.mcq');
Route::get('pickleball/generate_paper', [App\Http\Controllers\PickleballController::class,'generatePaper'])->name('pickleball.generatepaper');


require __DIR__ . '/auth.php';
