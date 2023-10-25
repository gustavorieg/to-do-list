<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function tasks()
    {
        return view("tasks");
    }
}
