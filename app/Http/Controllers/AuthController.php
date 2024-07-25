<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $check = Auth::check();
        if ($check) {
            $getusername = Auth::user()->username;
            return redirect()->route('home')->with('success','Selamat Datang ' . $getusername . ',');
            
        } else {
            return view('login');
        }
    }

    public function login_proses(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($data)){
            return redirect()->route('home');
        }else{
            return redirect()->route('login')->with('error', 'Email atau Password salah');
        }
    }   

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');

    }

    public function register()
    {
        $check = Auth::check();
        if ($check) {
            $getusername = Auth::user()->username;
            return redirect()->route('home')->with('success','Selamat Datang ' . $getusername . ',');
            
        } else {
            return view('register');
        }
    }

    public function register_proses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $parts = explode(" ", $request->name);
        $create_username = $parts[0];
        $lowercase_username = strtolower($create_username);

        //check if username exists
        $check_username = DB::table('users')->where('username', $lowercase_username)->exists();

        if($check_username){
            $suffix = 1;
            do {
                $suffix++;
                $create_username = $lowercase_username . $suffix;
            } while(DB::table('users')->where('username', $create_username)->exists());
            $username = $create_username;

        }else{
            $username = $lowercase_username;
        }

        $check_email = DB::table('users')->where('email', $request->email)->exists();
        if ($check_email) {
            return redirect()->route('register')->with('error', 'Email sudah terdaftar');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'verifikasi' => 'unverified',
            'username' => $username,
        ];
        DB::table('users')->insert($data);
        return redirect()->route('login')->with('success', 'Registrasi berhasil, silahkan login');
    }
}
