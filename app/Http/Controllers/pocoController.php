<?php

namespace App\Http\Controllers;

use App\pcs;
use Illuminate\Http\Request;

class pocoController extends Controller
{
    public function adminDashboard() {
        return view('layouts.backend.adminDash');
    }

public function changeProfile() {
    return view('layouts.frontend.layouts.profile');
}

public function upload(Request $request)
{
    $validator = [
        'name' => ['required', 'string', 'max:255'],
        'address' => ['required', 'string', 'max:255'],
        'contact' => ['required', 'string', 'max:15'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        $this->validate($request, ['file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]),
    ];

    if($request->hasFile('image')){
        $filename = $request->image->getClientOriginalName();
        $request->image->storeAs('images',$filename,'public');
        Auth()->user()->update([
            'name'=>$request->get('name'),
            'address'=>$request->get('address'),
            'contact'=>$request->get('contact'),
            'email'=>$request->get('email'),
            'image'=>$filename,
        ]);
    }
    return redirect()->back()->withErrors($validator)->withInput();
}

}
