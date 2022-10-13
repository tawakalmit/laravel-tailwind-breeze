<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SampleController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('crud', [CrudController::class, 'index'])->name('crud.index');
Route::post('crud', [CrudController::class, 'store'])->name('crud.store');
Route::get('crud/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
Route::put('crud/{id}', [CrudController::class, 'update'])->name('crud.update');
Route::delete('crud/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');

Route::get('sample', [SampleController::class, 'index'])->name('sample.index');

Route::get('buy/{id}', [BuyController::class, 'index'])
    ->name('buy.index')
    ->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
