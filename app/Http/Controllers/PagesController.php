<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $nama = 'Devin Winando';

        return view('index', ['nama' => $nama]);
    }
    
    public function about()
    {
        return view('about');
    }
}