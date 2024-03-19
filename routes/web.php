<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use GuzzleHttp\Promise\TaskQueue;
use Illuminate\Support\Facades\Route;

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

    //routes to authenticated users only and adds tasks resurces to route to the exixting routes and applies the auth middleware.
    Route::resource('tasks',TaskController::class);
    Route::get('/tasks/{tasks}/mark-completed',[TaskController::class,'markCompleted'])->name('tasks.mark-completed');
    Route::get('/tasks/{tasks}/mark-uncompleted',[TaskController::class,'markUncompleted'])->name('tasks.mark-uncompleted');

});


require __DIR__.'/auth.php';
