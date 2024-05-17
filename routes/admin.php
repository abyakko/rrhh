<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermisoController;
use Illuminate\Support\Facades\Route;


Route::resource('users', UserController::class)->names('user')->middleware('auth');
Route::resource('roles', RolController::class)->names('rol')->middleware('auth');
Route::resource('permisos', PermisoController::class)->names('permiso')->middleware('auth');
