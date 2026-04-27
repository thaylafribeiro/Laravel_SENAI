<?php

namespace App\Http\Controllers;
use App\Models\InformacaoPessoal;
use Illuminate\Http\Request;

class InformacaoPessoalController extends Controller
{
    public function create()
    {
        return view('informacoes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'telefone' => 'required',
            'idade' => 'required|integer',
            'data_nascimento' => 'required|date',
            'endereco' => 'required'
        ]);

        InformacaoPessoal::create($request->all());

        return redirect()->back()->with('success', 'Dados cadastrados com sucesso!');
    }

    public function index()
    {
        $dados = InformacaoPessoal::all();
        return view('informacoes.index', compact('dados'));
    }
}