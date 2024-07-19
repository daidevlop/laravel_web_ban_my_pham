<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
        return view('client.register');
    }
    public function postRegister(Request $request){
        // dd($request);
    }
}
