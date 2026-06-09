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
            padding: 30px;
        }

        .container{
            max-width: 1400px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1{
            text-align: center;
            color: #333;
            margin-bottom: 25px;
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
            border-radius: 6px;
            min-width: 220px;
        }

        .form-busca-setor button{
            background: #0d6efd;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 6px;
            cursor: pointer;
            transition: .3s;
        }

        .form-busca-setor button:hover{
            background: #0b5ed7;
        }

        .table-container{
            overflow-x: auto;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            min-width: 1200px;
        }

        thead{
            background: #0d6efd;
            color: white;
        }

        th, td{
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:hover{
            background: #f8f9fa;
        }

        .sem-registro{
            font-weight: bold;
            color: #777;
            padding: 20px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>🎬 Controle de Filmes</h1>

    <form method="GET" action="{{ route('filme.listar') }}" class="form-busca-setor">

        <input
            type="text"
            name="titulo"
            placeholder="Pesquisar título..."
            value="{{ request('titulo') }}"
        >

        <input
            type="date"
            name="dataLancamento"
            value="{{ request('dataLancamento') }}"
        >

        <button type="submit">
            Buscar
        </button>

    </form>

    <div class="table-container">

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TÍTULO</th>
                    <th>DATA LANÇAMENTO</th>
                    <th>SINOPSE</th>
                    <th>GÊNERO</th>
                    <th>ORÇAMENTO</th>
                    <th>AUTOR ID</th>
                    <th>NOME</th>
                    <th>DATA NASCIMENTO</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                </tr>
            </thead>

            <tbody>
                @forelse($filmes as $filme)
                    <tr>
                        <td>{{ $filme->id }}</td>
                        <td>{{ $filme->titulo }}</td>
                        <td>{{ $filme->dataLancamento }}</td>
                        <td>{{ $filme->sinopse }}</td>
                        <td>{{ $filme->genero }}</td>
                        <td>R$ {{ number_format($filme->orcamento, 2, ',', '.') }}</td>

                        <td>{{ $filme->autor->id ?? 'N/A' }}</td>
                        <td>{{ $filme->autor->nome ?? 'N/A' }}</td>
                        <td>{{ $filme->autor->dataNascimento ?? 'N/A' }}</td>
                        <td>{{ $filme->autor->email ?? 'N/A' }}</td>
                        <td>{{ $filme->autor->telefone ?? 'N/A' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="sem-registro">
                            Nenhum filme encontrado
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>

</body>
</html>