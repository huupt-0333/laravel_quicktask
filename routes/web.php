<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')
    ->middleware('admin')
    ->controller(UserController::class)
    ->group(function () {
        Route::get('/', 'index')->name('users.index');
        Route::get('/create', 'create')->name('users.create');
        Route::get('/edit', 'edit')->name('users.edit');
        Route::get('/{user}', 'show')->name('users.show');
        Route::post('/', 'store')->name('users.store');
        Route::put('/{user}', 'update')->name('users.update');
        Route::delete('/{user}', 'destroy')->name('users.destroy');
    });

Route::resource('tasks', TaskController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('language/{lang}', [LanguageController::class, 'changeLanguage'])->name('locale');

require __DIR__ . '/auth.php';
