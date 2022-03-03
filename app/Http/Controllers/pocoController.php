<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pocoController extends Controller
{
    public function adminDashboard() {
        return view('layouts.backend.adminDash');
    }

    public function userDash() {
        return view('layouts.frontend.layouts.userDash');
    }
}
