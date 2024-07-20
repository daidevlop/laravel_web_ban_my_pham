<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('client.login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('products-client.index');
        }else{
            return back()->with('error', 'Sai email hoac mat khau');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
