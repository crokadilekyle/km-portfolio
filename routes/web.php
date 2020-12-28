<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index'])->name('home');
Route::get('/details/{slug}', [ProjectController::class, 'details']);
Route::get('/about', function(){
    return view('public.about');
});
Route::get('/sandbox', function(){
    return view('public.sandbox');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum'])->get('/projects', [ProjectController::class, 'admin'])->name('projects');
Route::middleware(['auth:sanctum'])->get('/project/{id}', [ProjectController::class, 'show']);
Route::middleware(['auth:sanctum'])->post('/project', [ProjectController::class, 'store']);
Route::middleware(['auth:sanctum'])->put('/project/{id}', [ProjectController::class, 'update']);


