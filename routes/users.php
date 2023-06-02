<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get("/users", [UserController::class, "index"])->name("users.index");
Route::get("/users/create", [UserController::class, "create"])->name("users.create");