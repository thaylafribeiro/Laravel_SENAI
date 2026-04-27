<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'turma_id',
        'telefone',
        'idade',
        'data_nascimento',
        'endereco'
    ];

    public function turma(){
        return $this->belongsTo(Turma::class);
    }

    public function InformacoesPessoais(){
        return $this->belongsTo(InformacoesPessoais::class);
    }
}
