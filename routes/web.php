<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;

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



Route::get('category/{category_id}', [CategoryController::class, 'index'])->name('category.index');

Route::get('sample', [SampleController::class, 'index'])->name('sample.index');

Route::get('profile', [ProfileController::class, 'index'])
    ->name('profile.index')
    ->middleware('auth', 'verified');

Route::get('buy/{id}', [BuyController::class, 'index'])
    ->name('buy.index')
    ->middleware('auth', 'verified');

/* ------- Admin-Route -------- */
Route::prefix('admin')->group(function(){
    Route::get('/login', [AdminController::class, 'index'])->name('login_from');
    Route::get('/register', [AdminController::class, 'register'])->name('register.register');
    Route::get('/login/owner', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dahsboard', [AdminController::class, 'dashboard'])->name('login.dashboard');

    Route::get('crud', [CrudController::class, 'index'])->name('crud.index');
    Route::post('crud', [CrudController::class, 'store'])->name('crud.store');
    Route::get('crud/{id}/edit', [CrudController::class, 'edit'])->name('crud.edit');
    Route::put('crud/{id}', [CrudController::class, 'update'])->name('crud.update');
    Route::delete('crud/{id}', [CrudController::class, 'destroy'])->name('crud.destroy');

    
});
/* ------- End Admin-Route -------- */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
