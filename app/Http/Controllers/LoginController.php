<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Admin Giriş Sistemi
    public function Adminloginview()
    {
        return view('teacher.login');
    }

    public function Adminloginpost(Request $request)
    {
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect("/admin");
        }
        else {
            return redirect("/bdakademi-girisde");
        }
    }
}
