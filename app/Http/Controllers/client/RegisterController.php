<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(){
        return view('client.register');
    }
    
    public function postRegister(Request $request){
        // dd($request);
        $this->validate($request, [
            'name' => 'required|min:3',  
            'email'=>'required|email|unique:users',
            'password' => 'required|min:6|',
        ]);
        // dd($request);
       $reg = DB::table('users')->insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'password' => Hash::make($request['password']),
       ]);
       if($reg){
           return redirect()->route('login');
       }
    }
}
