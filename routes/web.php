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
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::group([
    'prefix' => '/admin',
    'middleware' => [
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
        'role:admin'
    ]
], function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('configs', App\Http\Controllers\Admin\ConfigController::class)->names('admin.configs');
});

Route::get('mock', [App\Http\Controllers\MockController::class,'index'])->name('mock.index');

Route::get('mock/pirls', [App\Http\Controllers\Mock\PirlsController::class,'index'])->name('pirls.index');
