<?php

namespace App\Domains\Usuario\Controllers;

use Illuminate\Http\Request;
use App\Domains\Usuario\Models\Usuario;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class UserController extends Controller {
    public function loginForm() {
        return(view('auth.login'));
    }

    public function registerForm() {
        return(view('auth.register'));
    }

    public function register(Request $request) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|unique:usuarios,email',
            'password' => 'required|min:6',
        ]);

        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($usuario);

        return redirect()->route('home.index');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|min:6',
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if($usuario === null) return(view('auth.login'));

        if(!Hash::check($request->password, $usuario->password)) {
            return(view('auth.login'));
        }

        Auth::login($usuario, $request->remember);
        return redirect()->route('home.index');
    }

    public function logout(Request $request){
        Auth::logout();

         $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
