<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
     public function index(){
        return view('login.index');
    }

    public function auth(Request $request)
    {
      $dados = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ],

        [
            'email.required' => 'O campo e-mail é obrigatorio',
            'email.email' => 'O e-mail não é valido',
            'password.required' => 'O campo senha nao é valido'
        ]);


        if(Auth::attempt($dados)){
            $request->session()->regenerate();
            return redirect()->route('lobby.index');
        }else{
            return redirect()->back()->with('erro', 'E-mail ou senha inválidos');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('lobby.index')->with('sucesso', 'Sessão deslogada');
    }

}
