<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("admin/login");
});

Route::get('/admin/contact', [AdminController::class, 'index'])->name('admin.contact');
Route::get ('admin/login', action: [LoginController::class, 'index'])->name('app');