<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ProblemsController extends Controller
{
    public function index()
    {
        return view('user.problems');
    }
}