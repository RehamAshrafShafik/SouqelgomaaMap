<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GovernomentController extends Controller
{
    public function index()
    {
        return view('gov');
    }
}
