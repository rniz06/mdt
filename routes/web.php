<?php

use App\Http\Controllers\FineBatchController;
use App\Http\Controllers\FineController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {

    // Ruta encargada del modulo de usuarios
    Route::resource('users', UserController::class);

    // Ruta encargada del modulo de roles
    Route::resource('roles', RoleController::class);

    // Ruta encargada del modulo de permisos
    Route::resource('permissions', PermissionController::class);

    // Ruta encargada del modulo de generar boletas - transito
    Route::resource('fine_batch', FineBatchController::class);

    // Ruta encargada del modulo de Multas - transito
    Route::controller(FineController::class)->group(function () {
        Route::get('multas/cargar', 'asignarMulta')->name('multas.asignarMulta');
        Route::get('multas/cargar/{multa}', 'cargar')->name('multas.cargar');
        Route::post('multas/cargar/{multa}', 'storeMulta')->name('multas.storeMulta');
        Route::get('multas', 'index')->name('multas.index');
        Route::get('multas/create', 'create')->name('multas.create');
        Route::post('multas/store', 'store')->name('multas.store');
        Route::get('multas/{multa}', 'show')->name('multas.show');
        Route::get('multas/{multa}/edit', 'edit')->name('multas.edit');
        Route::put('multas/{multa}', 'update')->name('multas.update');
        Route::delete('multas/{multa}', 'destroy')->name('multas.destroy');
        Route::put('/multas/anular/{multa}', 'anulacion')->name('multas.anulacion');
    });
});



//Route::get('/folders/{id}/download', [FolderFileController::class, 'download'])->name('folders.file.download');

// Route::controller(CitizenController::class)->group(function(){
//     Route::get('citizens', 'index')->name('citizens.index');
//     Route::get('citizens/create', 'create')->name('citizens.create');
//     Route::post('citizens/store', 'store')->name('citizens.store');
//     Route::get('citizens/{citizen}', 'show')->name('citizens.show');
//     Route::get('citizens/{citizen}/edit', 'edit')->name('citizens.edit');
//     Route::put('citizens/{citizen}', 'update')->name('citizens.update');
//     Route::delete('citizens/{citizen}', 'destroy')->name('citizens.destroy');
// });
