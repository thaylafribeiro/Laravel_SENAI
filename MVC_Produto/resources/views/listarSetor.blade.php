<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETOR</title>
</head>

<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body{
    background-color: #f4f6f9;
    padding: 40px;
}

h1{
    text-align: center;
    color: #2c3e50;
    margin-bottom: 40px;
    font-size: 40px;
}

a{
    text-decoration: none;
    color: #3498db;
    font-weight: 600;
    margin-right: 15px;
}

a:hover{
    color: #2980b9;
}

.links{
    margin-bottom: 20px;
}

table{
    width: 100%;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    border-radius: 8px;
    overflow: hidden;
}

thead{
    background: #34495e;
    color: white;
}

th{
    padding: 15px;
    text-align: center;
    font-size: 15px;
}

td{
    padding: 14px;
    text-align: center;
    border-bottom: 1px solid #eaeaea;
}

tr:hover{
    background-color: #f8f9fa;
}

.btn-atualizar{
    background: #3498db;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
}

.btn-atualizar:hover{
    background: #2980b9;
    color: white;
}

.btn-excluir{
    background: #e74c3c;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-excluir:hover{
    background: #c0392b;
}

.success{
    background: #d4edda;
    color: #155724;
    padding: 12px;
    border-radius: 5px;
    margin-bottom: 20px;
}

.erro{
    background: #f8d7da;
    color: #721c24;
    padding: 12px;
    border-radius: 5px;
    margin-top: 20px;
}
</style>
<body>
    <h1>Relatório de SETOR</h1>
    <a href="{{route('produto.cadastro')}}">Cadastrar Produto</a>
    <br>
    <a href="{{route('setor.cadastro')}}">Cadastrar Setor</a>
    <br>

    <form method="GET" action ="{{route('setor.listar')}}">
        <input type="text" name="nome"placeholder="Digite o nome do setor" value="{{request('nome')}}">
        <button type="submit">Buscar</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>NUMERO SETOR</th>
            </tr>
        </thead>
        <tbody>
            @forelse($setores as $setor)
                <tr>
                    <td>{{ $setor->id }}</td>
                    <td>{{ $setor->nome }}</td>
                    <td>{{ $setor->ncorredor }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3"> Nenhum Setor encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>