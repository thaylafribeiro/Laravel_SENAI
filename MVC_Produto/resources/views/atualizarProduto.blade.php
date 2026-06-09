<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Produto</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body{
        background: #f4f6f9;
        padding: 40px;
    }

    h1{
        text-align: center;
        margin-bottom: 30px;
        color: #2c3e50;
    }

    form{
        max-width: 600px;
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    label{
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
        color: #34495e;
    }

    input,
    select{
        width: 100%;
        padding: 10px;
        border: 1px solid #dcdde1;
        border-radius: 5px;
        margin-bottom: 15px;
        transition: 0.3s;
    }

    input:focus,
    select:focus{
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 5px rgba(52,152,219,0.3);
    }

    button{
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        background: #3498db;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover{
        background: #2980b9;
    }

    p[style*="green"]{
        text-align: center;
        background: #d4edda;
        color: #155724 !important;
        padding: 10px;
        border-radius: 5px;
        max-width: 600px;
        margin: 0 auto 20px;
    }

    div[style*="red"]{
        max-width: 600px;
        margin: 20px auto;
        background: #f8d7da;
        padding: 15px;
        border-radius: 5px;
    }

    ul{
        padding-left: 20px;
    }
</style>
<body>
    <h1>Atualizar Produto</h1>

    @if(session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('produto.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome..."
            require value="{{ old('nome', $produto->nome) }}"
        >
        <br><br>
        <label for="quantidade">Quantidade: </label>
        <input type="number" name="quantidade" id="quantidade" placeholder="Quantidade..."
            required value="{{ old('quantidade', $produto->quantidade)}}"
        >
        <br><br>
        <label for="valor">Valor: </label>
        <input type="number" name="valor" id="valor" placeholder="Valor..."
            required value="{{ old('valor', $produto->valor)}}"
        >

        <br><br>
        <label for="setor_id">Setores: </label>
        <select name="setor_id" id="setor_id">
            @foreach ($setores as $setor)
                <option value="{{ $setor->id }}"
                    {{ $produto->setor_id == $setor->id ? 'selected' : '' }}>
                    {{ $setor->nome }}
                </option>
            @endforeach
        </select>

        <br><br>
        <label for="descricao">Descricao: </label>
        <input type="text" name="descricao" id="descricao" placeholder="Descricao..."
           value="{{ old('descricao', $produto->detalheProduto?->descricao) }}"
        >

        <br><br>
        <label for="tamanho">Tamanho: </label>
        <input type="number" name="tamanho" id="tamanho" placeholder="Tamanho..."
            value="{{ old('tamanho', $produto->detalheProduto?->tamanho) }}"
        >

        <br><br>
        <label for="peso">Peso: </label>
        <input type="number" name="peso" id="peso" placeholder="Peso..."
           value="{{ old('peso', $produto->detalheProduto?->peso) }}"
        >

        <button type="submit">Atualizar</button>
    </form>

    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>
