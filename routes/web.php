<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/servers/{id}/manage', [DashboardController::class, 'manageServer'])->name('admin.servers.manage');
    Route::get('/users', [DashboardController::class, 'users'])->name('admin.users.index');
    Route::get('/settings', [DashboardController::class, 'settings'])->name('admin.settings');
});
