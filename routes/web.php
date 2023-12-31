<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

Route::get("/", [ToDoListController::class, "index"]);

Route::get("/tasks", [ToDoListController::class, "tasks"]);