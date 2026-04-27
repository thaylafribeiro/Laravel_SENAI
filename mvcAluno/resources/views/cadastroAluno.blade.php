<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Alunos</title>
</head>
<body>
    <h1>Cadastro Alunos 👩🏻‍💻</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{route('aluno.salvar') }}" method="POST">
        @csrf
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" placeholder="Nome..."
            require value="{{ old('nome') }}"
        >
        <br><br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" placeholder="Email..."
            required value="{{ old('email')}}"
        >

        <br><br>
        
        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" id="telefone" placeholder="Telefone..."
            required value="{{ old('telefone') }}">
        <br><br>

        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade" placeholder="Idade..."
            required value="{{ old('idade') }}">
        <br><br>

        <label for="data_nascimento">Data de Nascimento: </label>
        <input type="date" name="data_nascimento" id="data_nascimento"
            required value="{{ old('data_nascimento') }}">
        <br><br>

        <label for="endereco">Endereço: </label>
        <input type="text" name="endereco" id="endereco" placeholder="Endereço..."
            required value="{{ old('endereco') }}">
        <br><br>

        <label for="turma_id">ID DA TURMA: </label>
       
        <select name="turma_id" id="turma_id">
            @foreach ($turmas as $turma)
                <option value="{{$turma->id}}">{{$turma->serie}}</option>
            @endforeach
        </select>
        <br><br>

       <button type="submit" style="border-radius: 7px; background-color:blue; color:white;">Cadastrar</button>
    </form>

    @if($errors->any())
        <div style="color:red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>