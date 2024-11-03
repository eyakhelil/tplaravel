<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/etudiant', [EtudiantController::class,"index"])*/
//Route::resource('etudiant','App\Http\Controllers\EtudiantController');
Route::group(['middleware' => ['auth']], function () {
Route::get('/etudiant', [EtudiantController::class,"index"])->name('etudiant');
Route::get('/create', [EtudiantController::class,"create"])->name('etudiant.create');
Route::post('/create', [EtudiantController::class,"store"])->name('etudiant.ajouter');
Route::put('/etudiant/{etudiant}', [EtudiantController::class,"update"])->name('etudiant.update');
Route::get('/etudiant/{etudiant}', [EtudiantController::class,"edit"])->name('etudiant.edit');
Route::get('/show/{etudiant}', [EtudiantController::class,"show"])->name('etudiant.show');
Route::delete('/delete/{etudiant}', [EtudiantController::class,"delete"])->name('etudiant.delete');
});