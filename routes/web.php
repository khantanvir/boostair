<?php

use Illuminate\Support\Facades\Route;


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'admin_login']);
Route::get('/forgot-password', [App\Http\Controllers\LoginController::class, 'forgot_password']);

Route::post('/admin-login', [App\Http\Controllers\LoginController::class, 'custom_login']);
Route::get('/sign-out', [App\Http\Controllers\LoginController::class, 'sign_out']);

Route::get('dashboard/all-role', [App\Http\Controllers\DashboardController::class, 'all_role']);
Route::get('role/activate/{id?}', [App\Http\Controllers\DashboardController::class, 'activate']);
Route::get('role/deactivate/{id?}', [App\Http\Controllers\DashboardController::class, 'deactivate']);


Route::get('dashboard/all-user', [App\Http\Controllers\DashboardController::class, 'all_user']);
Route::get('dashboard/all-admin-user', [App\Http\Controllers\DashboardController::class, 'all_admin_user']);


Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
