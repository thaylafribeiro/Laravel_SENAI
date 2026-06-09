<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos 💻</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

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

    <div class="background-glow"></div>
    <div class="background-glow-2"></div>

    <div class="container">

        <div class="card">

            <div class="header-section">
                <h1 class="title">Listagem de Produtos</h1>
                <div class="decoration-line"></div>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 70px;">ID</th>
                            <th>Nome</th>
                            <th class="text-center">MATÉRIA</th>
                            <th>DATA</th>
                            <th>QUANTIDADE</th>
                            <th>PREÇO</th>
                            <th class="text-center" style="width: 110px;">Editar</th>
                            <th class="text-center" style="width: 110px;">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>