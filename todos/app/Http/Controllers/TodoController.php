<?php

namespace App\Http\Controllers;

use App\Todo;

class TodoController extends Controller
{
    public function __invoke()
    {
        return Todo::all();
    }
}
