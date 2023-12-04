<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// Agregamos controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios', function () {
    return view('usuarios');
});
Route::get('/roles', function () {
    return view('usuarios');
});
Route::get('/blogs', function () {
    return view('usuarios');
});
Route::get('/estudiantes', function () {
    return view('usuarios');
});
Route::get('/equipos', function () {
    return view('usuarios');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('estudiantes', EstudianteController::class);
    Route::resource('equipos', EquipoController::class);
});