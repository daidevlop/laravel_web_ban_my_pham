<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        // User::query()->find(4)->update([
        //     'password'=>bcrypt('password')
        // ]);
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
        return redirect()->route('products-client.index');
    }
    public function verify($token){
        $user = User::query()->where('email_verified_at',null)->where('user_id',$token);
    }
}
