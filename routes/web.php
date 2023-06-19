<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'show'])->name('home');

Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

Route::middleware(['auth'])->group(function (){

    Route::get('/announcement/create', function(){
        return view('announcement.create');
    })->name('announcement.create');
});

Route::get('announcement/detail/{announcement}', [PublicController::class, 'detailShow'])->name('detailShow');

