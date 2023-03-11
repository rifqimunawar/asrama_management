<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;

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

Route::get('/berita', function () {
    return view('client.berita');
});

// ==============================================================
// Route Client
// ==============================================================
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('index');
Route::get('/team', [TeamController::class, 'index'])->name('index');
// Route::get('/berita', [BeritaController::class, 'index'])->name('index');
Route::get('/contact', [ContactController::class, 'index'])->name('index');
Route::post('/contact/store', [ContactController ::class, 'store'])->name('store');
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
// Route Admin Galeri Edit
Route::get('/admin/galeri', [GaleriController ::class, 'list'])->name('list');
Route::get('/admin/galeri/create', [GaleriController ::class, 'create'])->name('create');
Route::post('/admin/galeri/store', [GaleriController ::class, 'store'])->name('store');
Route::get('/admin/galeri/{id}/edit', [GaleriController ::class, 'edit'])->name('edit');
Route::put('/admin/galeri/{id}', [GaleriController ::class, 'update'])->name('update');
Route::delete('/admin/galeri/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
// Route Admin Team Edit
Route::get('/admin/team', [TeamController ::class, 'list'])->name('list');
Route::get('/admin/team/create', [TeamController ::class, 'create'])->name('create');
Route::post('/admin/team/store', [TeamController ::class, 'store'])->name('store');
Route::get('/admin/team/{id}/edit', [TeamController ::class, 'edit'])->name('edit');
Route::put('/admin/team/{id}', [TeamController ::class, 'update'])->name('update');
Route::delete('/admin/team/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
// Route Admin Message Edit
Route::get('/admin/contact', [ContactController ::class, 'list'])->name('list');
Route::delete('/admin/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
// Route Admin Berita Edit
Route::get('/admin/berita', [BeritaController ::class, 'list'])->name('list');
Route::get('/admin/berita/create', [BeritaController ::class, 'create'])->name('create');
Route::post('/admin/berita/store', [BeritaController ::class, 'store'])->name('store');
Route::get('/admin/berita/{id}/edit', [BeritaController ::class, 'edit'])->name('edit');
Route::put('/admin/berita/{id}', [BeritaController ::class, 'update'])->name('update');
Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('team.destroy');