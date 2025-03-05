<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\YourGainzController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/home', [YourGainzController::class, 'home'])->name('yourgainz.home');
Route::get('/imc', [YourGainzController::class, 'menuimc'])->name('yourgainz.menuimc');
Route::get('/routines', [YourGainzController::class, 'routines'])->name('yourgainz.routines');
Route::get('/menumain', [YourGainzController::class, 'menumain'])->name('yourgainz.menumain');
Route::get('/exercises', [YourGainzController::class, 'exercises'])->name('yourgainz.exercises');
});




Route::get('/exercise', [ExerciseController::class, 'index']);
Route::get('/exercise/{muscle}', [ExerciseController::class, 'getExercises']);





require __DIR__.'/auth.php';
