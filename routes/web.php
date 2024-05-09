<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', [DashboardController::class, 'index'])-> name('dashboard');
Route::post('/ideas',[IdeaController::class, 'store'] )->name('ideas.create');
Route::get('/ideas/{idea}',[IdeaController::class, 'show'] )->name('ideas.show');
Route::delete('/ideas/{idea}',[IdeaController::class, 'destroy'] )->name('ideas.destroy');
Route::get('/ideas/{idea}/edit',[IdeaController::class, 'edit'] )->name('ideas.edit');
Route::put('/ideas/{idea}',[IdeaController::class, 'update'] )->name('ideas.update');

//comments
// model
// controller
// migration
//setup the routes



Route::get('/terms', function () {
    return view('terms');
});


