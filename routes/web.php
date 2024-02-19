<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Http;


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



Route::get('/',[Controller::class,'index'])->name('home');
Route::get('docs', [Controller::class, 'docs'])->name('docs');




// Apiye bağlı tüm episode rotaları
    Route::get('episode', [ApiController::class, 'episodeIndex']);
    Route::get('episode/{id}', [ApiController::class, 'getSingleEpisode']);
    Route::get('multiEpisode/{id}', [ApiController::class, 'multiEpisode']);
    Route::get('/filterEpisode', [ApiController::class, 'getFilterEpisode']);


// Apiye bağlı tüm location rotaları
    Route::get('location', [ApiController::class, 'locationIndex']);
    Route::get('location/{id}', [ApiController::class, 'getSingleLocation']);
    Route::get('/multiLocation/{id}', [ApiController::class, 'multiLocation']);
    Route::get('/filterLocation', [ApiController::class, 'getFilterLocation']);

    

// Apiye bağlı tüm karakter rotaları
    Route::get('characters', [ApiController::class, 'charactersIndex']);
    Route::get('character/{id}', [ApiController::class, 'getSingleCharacter']);
    Route::get('/multiCharacters/{id}', [ApiController::class, 'multiCharacters']);
    Route::get('/filterCharacter', [ApiController::class, 'getFilterCharacter']);



   