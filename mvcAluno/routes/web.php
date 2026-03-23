<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;


Route::get('/', function () {
    return view('welcome');
});

// Get - listar os usuários cadastrados
Route::get('/aluno/listar',[AlunoController::class, 'listar'])->name('aluno.listar'); // tem que acessar o banco


Route::get('/aluno/cadastrar', function(){
    return view('cadastro');
})->name('aluno.cadastro'); // não precisa acessar o banco ela busca direto na view


// Post - enviar os dados para cadastrar usuários
Route::post('/aluno/salvar', [AlunoController::class, 'add'])->name('aluno.salvar');
