<!DOCTYPE html>
<html lang="{{str_replace('_', '-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro dos Produtos</title>
</head>
<body>
    <h1>Cadastro dos Produtos</h1>

    @if(session('success'))
        <p style='color:green'>{{session('success')}}</p>
    @endif

    <form action='{{route('produto.salvar')}}' method="POST">
        @csrf
        <label form='nome'>Nome: </label>
        <input type='text' name='nome' id='nome' placeholder='Nome...'
            require value='{{old('nome')}}'
        >
        <br><br>
        <label for="quantidade">Quantidade: </label>
        <input type="value" name="quantidade" id="quantidade" placeholder="Quantidade..."
        >
        <br><br>
        <label form='preco'>Preço: </label>
        <input type='text' name='preco' id='preco' placeholder='Preco...'
            require value='{{old('preco')}}'>


        <input type="submit" value="Cadastrar">

    </form>

    @if($errors->any())
        <div style="color: red">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{$erro}}</li> 
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>