<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Carbon\Carbon;

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

    public function showRegisterForm(){
        return view('login.register');
    }

    public function register(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users, email',
            'password' => 'required|confirmed'
        ];

        $messages = [
            'name.required'     => 'Nama wajib diisi',
            'email.required'    => 'Email wajib diisi',
            'email.email'       => 'Sepertinya kamu tidak memasukkan email',
            'email.unique'      => 'Email sudah digunakan, coba email lain',
            'password.required' => 'Password wajib diisi',
            'password.confirmed'=> 'Konfirmasi password tidak sesuai'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = Carbon::now();
        $save = $user->save();
        
        if($save){
            Session::flash('success', 'Register Berhasil! Silahkan login!');
            return redirect('/');
        }else{
            Session::flash('fail', ['' => 'Register Gagal! Coba ulangi beberapa saat lagi!']);
            return redirect('/register');
        }
    }
}