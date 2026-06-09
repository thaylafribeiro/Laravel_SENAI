<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Filmes</title>

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

        .container{
            max-width: 1000px;
            margin: auto;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-busca-setor{
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .form-busca-setor input{
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            flex: 1;
            min-width: 200px;
        }

        .form-busca-setor button{
            background: #0d6efd;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .form-busca-setor button:hover{
            background: #0b5ed7;
        }

        table{
            width: 100%;
            border-collapse: collapse;
        }

        table thead{
            background: #0d6efd;
            color: white;
        }

        table th,
        table td{
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table tbody tr:hover{
            background: #f8f9fa;
        }

        .sem-registro{
            color: #777;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Lista de Autores</h1>

        <form method="GET" action="{{ route('autor.listar') }}" class="form-busca-setor">

            <input type="text"
                   name="nome"
                   placeholder="Pesquisar nome..."
                   value="{{ request('nome') }}">

            <input type="number"
                   name="telefone"
                   placeholder="Pesquisar telefone..."
                   value="{{ request('telefone') }}">

            <button type="submit">Buscar</button>

        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>E-MAIL</th>
                    <th>TELEFONE</th>
                </tr>
            </thead>

            <tbody>
                @forelse($autores as $autor)
                    <tr>
                        <td>{{ $autor->id }}</td>
                        <td>{{ $autor->nome }}</td>
                        <td>{{ $autor->dataNascimento }}</td>
                        <td>{{ $autor->email }}</td>
                        <td>{{ $autor->telefone }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="sem-registro">
                            Nenhum autor encontrado
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

</body>
</html>