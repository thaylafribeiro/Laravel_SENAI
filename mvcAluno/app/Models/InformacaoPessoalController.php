<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class InformacaoPessoal extends Model
{
    protected $table = 'informacoes_pessoais';

    protected $fillable = [
        'telefone',
        'idade',
        'data_nascimento',
        'endereco'
    ];
}