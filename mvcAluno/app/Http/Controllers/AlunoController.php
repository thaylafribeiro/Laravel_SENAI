<?php
namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function listar(){
        $alunos = Aluno::with('turma')->get();
        return view('listar', compact('alunos'));
    }

    public function cadastro(){
        $turmas = Turma::get();
        return view('cadastroAluno', compact('turmas'));
    }

    public function add(Request $request){

        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:alunos,email',
            'turma_id' => 'nullable|exists:turmas,id',
            'telefone' => 'required',
            'idade' => 'required|integer',
            'data_nascimento' => 'required|date',
            'endereco' => 'required'
        ]);

        Aluno::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'turma_id' => $request->turma_id,
            'telefone' => $request->telefone,
            'idade' => $request->idade,
            'data_nascimento' => $request->data_nascimento,
            'endereco' => $request->endereco
        ]);

        return redirect()->back()->with('success','Aluno Cadastrado com sucesso!');
    }

    public function atualizar($id){
        $aluno = Aluno::findOrFail($id);
        return view('atualizar', compact('aluno'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => "required|string|max:255|unique:alunos,email,$id"
        ]);

        $aluno = Aluno::findOrFail($id);

        $aluno->nome = $request->nome;
        $aluno->email = $request->email;
        $aluno->telefone = $request->telefone;
        $aluno->idade = $request->idade;
        $aluno->data_nascimento = $request->data_nascimento;
        $aluno->endereco = $request->endereco;

        $aluno->save();

        return redirect()->back()->with('success','Aluno atualizado com suceso');
    }

    public function deletar($id){
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return redirect()->route('aluno.listar')
            ->with('success','Aluno excluído com sucesso!');
    }
}

