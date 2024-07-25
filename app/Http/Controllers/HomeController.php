<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $check = Auth::check();
        if ($check) {
            $getusername = Auth::user()->username;
            return redirect()->route('home')->with(compact('getusername'));
        } else {
            return view('login');
        }
    }

    public function home()
    {
        $check = Auth::check();
        if ($check) {
            $getusername = Auth::user()->username;
            return view('welcome', compact('getusername'));
            
        } else {
            return redirect()->route('index')->with('error', 'Silahkan login terlebih dahulu');
        }
    }
}
