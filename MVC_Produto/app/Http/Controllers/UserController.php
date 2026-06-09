<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
      public function add(Request $request){

        $request->validate([
            'nome' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:6|max:255',
            'tipo' => 'required',
            
        ]);

        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tipo' => $request->tipo
        ]);

        return redirect()->back()->with('success',' Usuário cadastrado com sucesso!');

    }

    public function autenticar(Request $request){

        
        $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->route('produto.listar'); // Redireciona para a página de listagem de produtos após o login bem-sucedido(pode ser outra página, dependendo da sua necessidade)
        }

        return back()->withErrors(['email' => 'Email ou senha incorretos.',]);
}


    public function trocarSenha(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:255'
        ]);

        $usuario = User::where('email', $request->email)->first();

        if (!$usuario) {
            return back()->withErrors([
                'email' => 'Usuario com esse email não encontrado.',
            ]);
        }

        $usuario->password = Hash::make($request->password);
        $usuario->save();
        return redirect()->route('login')->with('success', 'Senha alterada com sucesso! Faça login com sua nova senha.');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logout realizado com sucesso!');
    }
}