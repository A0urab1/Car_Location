<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\DirecteurController;
use App\Car;
use App\Models\Command;
use App\User;
use App\Http\Controllers\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsersController;


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

// Route::get('/index', function () {
//     return view('index');
// })->name('index');


Route::get('/About', function () {
     return view('About');
});
Route::get('/Services', function () {
    return view('Services');
});
Route::get('/Pricing', function () {
    return view('Pricing');
});
Route::get('/Car', function () {
    return view('Car');
});
Route::get('/Blog', function () {
    return view('Blog');
});
Route::get('/Contact', function () {
    return view('Contact');
});
Route::get('/', [CarController::class,'home'])->name('index');
Route::get('/commands/create',[CommandController::class,'create'])->name('commands.create');
Route::get('/cars/{id}',[CarController::class,'show'])->name('show');
Route::get('/login',[UserController::class,'login'])->name('users.login');
Route::get('/auth',[UserController::class,'auth'])->name('users.auth');
Route::get('/logOut',[UserController::class,'logout'])->name('users.logout');
Route::post('/register',[UserController::class,'register'])->name('users.register');
Route::get('/register',[UserController::class,'create'])->name('users.register');
Route::get('/users/{id}/profile',[UserController::class,'show'])->name('users.profil');
Route::get('/search', [CarController::class,'search'])->name('search');
Route::post('/commands/store',[CommandController::class,'store'])->name('command.store');
Route::get('/commands/{id}/create',[CommandController::class,'create'])->name('commands.create');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/commandes', [UserController::class, 'cmd'])->name('users.comma');
Route::get('/directeur', [DirecteurController::class, 'index'])->name('directeure.index');
