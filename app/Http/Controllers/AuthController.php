<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if(!Auth::check()){
            return view('auth.login');
        }
        else{
            return redirect('siswa');
        }
    }

    public function authenticate(Request $request)
    {
        $credential = $request->only('email', 'password');
        if(Auth::attempt($credential)){
            return redirect('siswa');
        }else{
            return redirect('login')->with('error_message', 'wrong email or password');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }

    public function register_form()
    {
        if(!Auth::check()){
            return view('auth.register');
        }
        else{
            return redirect('siswa');
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
      $request->validate([
        'name'     => 'min:4',
        'email'    => 'email|unique:users',
        'password' => 'min:4|max:6|confirmed'
      ]);

      User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password')),
        
    ]);

    return redirect('login');
    }


   
}
