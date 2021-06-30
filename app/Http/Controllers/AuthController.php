<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    public function showFormLogin(){
        if(Auth::check()){
            return redirect()->route('/home');
        }
        return view('login.login');
    }

    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;

        $rules = [
            'email' => 'required|email',
            'password' => 'required|string'
        ];

        $messages = [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Sepertinya kamu tidak memasukkan Email',
            'password.password' => 'Password wajib diisi',
            'password.string' => 'Kamu harus memasukkan string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        Auth::attempt(['email' => $email, 'password' => $password]);

        if(Auth::check()){
            return redirect()->route('home');
        }else{
            Session::flash('status', 'Email atau password salah');
            return redirect()->route('login');
        }
    }
}