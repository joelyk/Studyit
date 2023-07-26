<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\FormationController;

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

Route::get('/', function () { return view('app'); });
//Route::get('/', [FormationController::class, 'index']);
Route::get('/formations', [FormationController::class, 'index'])->name('formations.index');
Route::get('/formation/{id}', [FormationController::class, 'show'])->name('formation.show');
//Route::get('/', [PersonneController::class, 'index']);
Route::get('/personnes', [PersonneController::class, 'index'])->name('personnes.index');
Route::get('/personnes/create', [PersonneController::class, 'create'])->name('personnes.create');
Route::post('/personnes/create', [PersonneController::class, 'store'])->name('personnes.store');
Route::get('/personnes/{id}/edit', [PersonneController::class, 'edit'])->name('personnes.edit');
Route::put('/personnes/{id}/update', [PersonneController::class, 'update'])->name('personnes.update');
Route::delete('/personnes/{id}/destroy', [PersonneController::class, 'destroy'])->name('personnes.destroy');
Route::get('/search', [PersonneController::class, 'search']);