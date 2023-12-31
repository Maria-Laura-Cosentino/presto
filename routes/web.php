<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

    Route::get('/lavora-con-noi', function(){
        return view('auth.formRevisor');
    })->name('be.revisor');
});

Route::get('announcement/detail/{announcement}', [PublicController::class, 'detailShow'])->name('detailShow');

Route::get('announcement/index', [PublicController::class, 'indexShow'])->name('indexShow');

Route::get('/search/announcement',[PublicController::class, 'searchAnnouncements'])->name('announcements.search');

// Home revisore
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

// Accetta annuncio
Route::patch('/accept/announcement/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

// Rifiuta annuncio
Route::patch('/reject/announcement/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

//Storico annunci revisionati
Route::get('/revisor/history', [RevisorController::class, 'announcementsHistory'])->middleware('isRevisor')->name('revisor.history');

// Riprisitna stato annunci revisionati
Route::patch('/update/announcement/{announcement}', [RevisorController::class, 'updateAnnouncement'])->middleware('isRevisor')->name('revisor.update_announcement');

// Richiedi di diventare revisore
Route::post('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

// Lingua
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');
