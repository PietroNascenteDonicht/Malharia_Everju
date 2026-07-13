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
            'nome' => 'required|string|max:100',
            'email' => 'required|string|unique:usuarios,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|confirmed'
        ],
        [
            'nome.required' => 'Nome não informado',
            'nome.max' => 'O nome deve possuir menos que 100 caracteres',

            'email.required' => 'Email não informado',
            'email.unique' => 'Usuario Existente',

            'password.required' => 'Senha não informada',
            'password.min' => 'Senha deve ter mais de 6 caracteres', 

            'password_confirmation.required' => 'Senha não confirmada',
            'password_confirmation.confirmed' => 'Senhas não são iguais',
        ],
        );

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
        ],
        [
            'email.required' => 'Informe seu Email',
            'email.email' => 'Digite um Email Valido',
            'password.required' => 'Informe sua Senha',
            'password.min' => 'A senha deve ter no minimo 6 caracteres',
        ]
        );

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
