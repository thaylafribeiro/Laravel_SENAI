<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Detalhes</title>
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

<h1>Lista de Detalhes</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRIÇÃO</th>
            <th>TAMANHO</th>
            <th>PESO</th>
            <th>PRODUTO</th>
        </tr>
    </thead>

    <tbody>
        @forelse($detalhes as $detalhe)
            <tr>
                <td>{{ $detalhe->id }}</td>
                <td>{{ $detalhe->descricao }}</td>
                <td>{{ $detalhe->tamanho }}</td>
                <td>{{ $detalhe->peso }}</td>
                <td>{{ $detalhe->produto?->nome }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum detalhe encontrado</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>