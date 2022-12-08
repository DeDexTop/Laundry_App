<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email', 
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $user = User::find(auth()->user()->id);

            if($user->role === 'admin')
            {
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }
            elseif($user->role === 'Kurir')
            {
                $request->session()->regenerate();
                return redirect()->intended('/kurir');
            }
            elseif($user->role === 'Kasir')
            {
                $request->session()->regenerate();
                return redirect()->intended('/kasir/laundry');
            }
            elseif($user->role === 'Pencuci')
            {
                $request->session()->regenerate();
                return redirect()->intended('/pencuci');
            }
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
