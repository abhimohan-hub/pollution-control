<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pcs;

class pocoController extends Controller
{
    public function adminDashboard() {
        return view('layouts.backend.adminDash');
    }

public function showProfile() {
    $profiles = pcs::all();
    return view('welcome', compact('profiles'));
}

public function changeProfile() {
    return view('layouts.frontend.layouts.profile');
}

    public function updateProfile(Request $request, $id) {
        $image_url = '';

        if($request->hasFile('profile')) {
            $file = $request->file('profile');
            $new_name = str_random(5).time().$file->getClientOriginalName();
            $path =public_path('/uploads');
            $file->move($path, $new_name);
            $image_url = asset('uploads/'.$new_name);
            // dd($image_url);
        }

        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'profile' => $image_url ?? '',
        ];

        pcs::where('id', $id)->update($data);
        return redirect()->route('/');
    }

}
