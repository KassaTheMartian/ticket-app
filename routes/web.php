<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TicketTypeController;
use App\Http\Controllers\ArticleController;

// Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::get('/{customer}', [CustomerController::class, 'show'])->name('customers.show');
    Route::post('/', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
});

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/{user}', [UserController::class, 'show'])->name('users.show');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

Route::prefix('departments')->group(function () {
    Route::get('/', [DepartmentController::class, 'index'])->name('departments.index');
    Route::get('/create', [DepartmentController::class, 'create'])->name('departments.create');
    Route::get('/{department}', [DepartmentController::class, 'show'])->name('departments.show');
    Route::post('/', [DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
    Route::put('/{department}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
});

Route::prefix('ticket_types')->group(function () {
    Route::get('/', [TicketTypeController::class, 'index'])->name('ticket_types.index');
    Route::get('/create', [TicketTypeController::class, 'create'])->name('ticket_types.create');
    Route::get('/{id}', [TicketTypeController::class, 'show'])->name('ticket_types.show');
    Route::post('/', [TicketTypeController::class, 'store'])->name('ticket_types.store');
    Route::get('/{id}/edit', [TicketTypeController::class, 'edit'])->name('ticket_types.edit');
    Route::put('/{id}', [TicketTypeController::class, 'update'])->name('ticket_types.update');
    Route::delete('/{id}', [TicketTypeController::class, 'destroy'])->name('ticket_types.destroy');
});

Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/{article}', [ArticleController::class, 'show'])->name('articles.show');
    Route::post('/', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/{article}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
});