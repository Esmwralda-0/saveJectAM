<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function Login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('success', 'Login successful');
        }
        return back()->withErrors(['email' => 'Wrong credentials', 'password' => 'Wrong password']);
    }

    public function create(Request $request)
    {
        $datosVerificados = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'birthday' => 'required|date',
        ]);

        if (User::create($datosVerificados)) {
            return redirect('/');
        }

        return back()->withErrors([
            'email' => 'vv lo escribiste mal',
            'password' => 'te volviste a equivocar vv',
            'birthday' => 'no te sabes tu fecha? o que wey',
        ]);
    }
}
