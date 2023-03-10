<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;

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

// Route::get('/adminhomeedit', function () {
//     return view('admin.home_edit');
// });

// ==============================================================
// Route Client
// ==============================================================
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [AboutController::class, 'index'])->name('index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('index');
Route::get('/team', [TeamController::class, 'index'])->name('index');
// ==============================================================
// Route Admin
// ==============================================================
Route::get('/admin', [AdminController::class, 'index'])->name('index');
// Route Admin Home Edit
Route::get('/admin/home', [HomeController::class, 'list'])->name('list');
Route::get('/admin/home/{id}/edit', [HomeController::class, 'edit'])->name('edit');
Route::put('/admin/home/{id}', [HomeController::class, 'update'])->name('update');
// Route Admin About Edit
Route::get('/admin/about/{id}/edit', [AboutController::class,'edit'])->name('edit');
Route::put('/admin/about/{id}', [AboutController::class,'update'])->name('update');
