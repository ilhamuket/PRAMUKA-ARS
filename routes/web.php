<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftarController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

//home
Route::get('/', [HomeController::class, 'index']);
Route::get('/sandiambacana', [HomeController::class, 'sandiambacana'])->name('sandiambacana');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');
Route::get('/kategori/{id}', [HomeController::class, 'detailKategori'])->name('detailKategori');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/logo', [HomeController::class, 'logo'])->name('logo');
Route::get('/adart', [HomeController::class, 'adart'])->name('adart');
Route::get('/pramukars', [HomeController::class, 'pramukars'])->name('pramukars');
Route::get('/data', [HomeController::class, 'data'])->name('data');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/gugusdepan', [HomeController::class, 'gugusdepan'])->name('gugusdepan');
Route::get('/dewanambalan', [HomeController::class, 'dewanambalan'])->name('dewanambalan');
Route::get('/dewanracana', [HomeController::class, 'dewanracana'])->name('dewanracana');
Route::get('/unitprotokol', [HomeController::class, 'unitprotokol'])->name('unitprotokol');
Route::get('/unitsearchandrescue', [HomeController::class, 'unitsearchandrescue'])->name('unitsearchandrescue');
Route::get('/unitmediapers', [HomeController::class, 'unitmediapers'])->name('unitmediapers');
Route::get('/programkerja', [HomeController::class, 'programkerja'])->name('programkerja');
Route::get('/prestasi', [HomeController::class, 'prestasi'])->name('prestasi');

Route::get('/join', [HomeController::class, 'join'])->name('join');
Route::post('/join', [HomeController::class, 'store'])->name('store');




//auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authLogin'])->name('authLogin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::prefix('article')->middleware('auth')->group(function () {
    Route::get('/list', [ArticleController::class,  'list'])->name('article.list');
    Route::get('/create', [ArticleController::class,  'create'])->name('article.create');
    Route::get('/edit/{id}', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/update/{id}', [ArticleController::class, 'update'])->name('article.update');
    Route::get('/publish/{id}', [ArticleController::class, 'publish'])->name('article.publish');
    Route::get('/delete/{id}', [ArticleController::class, 'delete'])->name('article.delete');
    Route::get('/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/article/show/{id}', [ArticleController::class, 'show'])->name('article.show');
    Route::post('/store', [ArticleController::class, 'store'])->name('article.store');
});


Route::prefix('pendaftar')->middleware('auth')->group(function () {
    Route::get('/list', [PendaftarController::class,  'list'])->name('pendaftar.list');
    Route::get('/create', [PendaftarController::class,  'create'])->name('pendaftar.create');
    Route::get('/edit/{id}', [PendaftarController::class, 'edit'])->name('pendaftar.edit');
    Route::put('/update/{id}', [PendaftarController::class, 'update'])->name('pendaftar.update');
    Route::get('/publish/{id}', [PendaftarController::class, 'publish'])->name('pendaftar.publish');
    Route::get('/index', [PendaftarController::class, 'index'])->name('pendaftar.index');
    Route::get('/pendaftar/show/{id}', [PendaftarController::class, 'show'])->name('pendaftar.show');
    Route::post('/store', [PendaftarController::class, 'store'])->name('pendaftar.store');
});


Route::prefix('category')->middleware('auth')->group(function () {
    Route::get('/list', [CategoryController::class,  'list'])->name('category.list');
    Route::get('/create', [CategoryController::class,  'create'])->name('category.create');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/publish/{id}', [CategoryController::class, 'publish'])->name('category.publish');
    Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
});
