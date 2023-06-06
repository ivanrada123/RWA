<?php

use App\Http\Controllers\Home;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\PartsController;
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
Route::get('/', [Home::class, 'index']);
/*Route::get('/', function () {
    return Inertia::render('index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/servis', [Home::class, 'servis']);
Route::post('/dodaj_mobitel', [Home::class, 'dodaj_mobitel']);
Route::get('/apple', [Home::class, 'apple']);
Route::get('/samsung',[Home::class, 'samsung']);
Route::get('/huawei',[Home::class, 'huawei']);
Route::get('/xiaomi',[Home::class, 'xiaomi']);
Route::get('/google',[Home::class, 'google']);
require __DIR__.'/auth.php';



Route::get('/manufacturer',[ManufacturerController::class, 'index'])->name('manufacturer.index');
Route::get('/manufacturer/create',[ManufacturerController::class, 'create'])->name('manufacturer.create');
Route::get('/manufacturer/{manufacture  r}/edit',[ManufacturerController::class, 'edit'])->name('manufacturer.edit');
Route::post('/manufacturer',[ManufacturerController::class, 'store'])->name('manufacturer.store');
Route::get('/manufacturer/{manufacturer}',[ManufacturerController::class, 'show'])->name('manufacturer.show');
Route::put('/manufacturer/{manufacturer}',[ManufacturerController::class, 'update'])->name('manufacturer.update');
Route::delete('/manufacturer/{manufacturer}',[ManufacturerController::class, 'destroy'])->name('manufacturer.destroy');

Route::get('/models',[ModelsController::class, 'index'])->name('models.index');
Route::get('/models/create',[ModelsController::class, 'create'])->name('models.create');
Route::get('/models/{models}/edit',[ModelsController::class, 'edit'])->name('models.edit');
Route::post('/models',[ModelsController::class, 'store'])->name('models.store');
Route::get('/models/{models}',[ModelsController::class, 'show'])->name('models.show');
Route::put('/models/{models}',[ModelsController::class, 'update'])->name('models.update');
Route::delete('/models/{models}',[ModelsController::class, 'destroy'])->name('models.destroy');

Route::get('/parts',[partsController::class, 'index'])->name('parts.index');
Route::get('/parts/create',[partsController::class, 'create'])->name('parts.create');
Route::get('/parts/{parts}/edit',[partsController::class, 'edit'])->name('parts.edit');
Route::post('/parts',[partsController::class, 'store'])->name('parts.store');
Route::get('/parts/{parts}',[partsController::class, 'show'])->name('parts.show');
Route::put('/parts/{parts}',[partsController::class, 'update'])->name('parts.update');
Route::delete('/parts/{parts}',[partsController::class, 'destroy'])->name('parts.destroy');