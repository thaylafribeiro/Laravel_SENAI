<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
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
        background: white;
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
        border-color: #28a745;
        box-shadow: 0 0 5px rgba(40,167,69,0.3);
    }

    input[type="submit"]{
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        background: #28a745;
        color: white;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: 0.3s;
    }

    input[type="submit"]:hover{
        background: #218838;
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
    <h1>Cadastro do Usuário</h1>


    @if(session('success'))
        <p style="color:green">{{ session('success')}}</p>
    @endif

    <form action="{{route('usuario.salvar') }}" method="POST">
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
        <label for="password">Senha: </label>
        <input type="password" name="password" id="password" placeholder="Senha..."
            required value="{{ old('password')}}"
        >
          
        <br><br>
        <label for="tipo">Tipo: </label>
        <select name="tipo" id="tipo" required>
            <option value="">Selecione o tipo de usuário</option>
            <option value="usuario" >Usuario</option>
            <option value="admin" >Administrador</option>
        </select>

        <input type="submit" value="Cadastrar">
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