<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(Request $request){
        $credentials = $request->validate([
            'email' =>'required|email',
            'password' =>'required',
        ]);

        if(!Auth::attempt($credentials)){
            return back()
            ->withErrors(['email' =>'email o password non corretti'])
            ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('employees.index'));
    }

    public function destroy(Request $request){
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
