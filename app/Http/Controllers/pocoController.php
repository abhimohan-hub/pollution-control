<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pocoController extends Controller
{
    public function dashboard() {
        return view('layouts.backend.dashboard');
    }

    public function adminFrontend() {
        return view('layouts.backend.layouts.admin.frontend');
    }

    public function userLoginDashboard() {
        return view('layouts.frontend.layouts.userLoginDashboard');
    }

    public function userLoggedinDashboard() {
        return view('layouts.frontend.layouts.userloggedin.userLoggedIn');
    }
}
