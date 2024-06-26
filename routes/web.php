<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [DashboardController::class, 'index'])-> name('dashboard');
Route::post('/ideas',[IdeaController::class, 'store'] )->name('ideas.create');
Route::get('/ideas/{idea}',[IdeaController::class, 'show'] )->name('ideas.show');
Route::delete('/ideas/{idea}',[IdeaController::class, 'destroy'] )->name('ideas.destroy');
Route::get('/ideas/{idea}/edit',[IdeaController::class, 'edit'] )->name('ideas.edit');
Route::put('/ideas/{idea}',[IdeaController::class, 'update'] )->name('ideas.update');


Route::post('/ideas/{idea}/comments', [CommentController::class, 'store'])->name('ideas.comments.store');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);



Route::get('/terms', function () {
    return view('terms');
});


