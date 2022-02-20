<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pocoController extends Controller
{
    public function dashboard() {
        return view('backend.dashboard');
    }
}
