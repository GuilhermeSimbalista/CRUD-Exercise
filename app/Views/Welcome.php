<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .inicial {
            width: 100%;
            height: 100vh;
            background-color: #222222;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }
        .text {
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .text h3 {
            text-align: center;
            font-size: 40px;
        }

        .text h5 {
            margin: 50px;
            font-size: 25px;
        }


        .button{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 25px;
            border: 2px solid white;
            border-radius: 5px;
            width: 150px;
            padding: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #bcb7bb;
            transform: scale(1.05);
            transition: 0.5s;
        }

        .btn a{
            text-decoration: none;
            color: black;
            
        }
    </style>
</head>
<body>

<!-- NavBar -->

<nav class="navbar navbar-expand-lg bg-dark">
<div class="container-md">
    <a class="navbar-brand fs-3 text-light" href="/">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link fs-3 text-light" aria-current="page" href="/cliente">Cliente</a>
        </li>
        <li class="nav-item">
        <a class="nav-link fs-3 text-light" href="/produto">Produto</a>
        </li>
        <li class="nav-item">
        <a class="nav-link fs-3 text-light" href="/loja">Lojas</a>
        </li>
    </ul>
    </div>
</div>
</nav>


    <div class="inicial">
    <div class="text">
    <h3>Seja Bem-Vindo Ao CRUD</h3>

    <h5>Escolha a opção desejada abaixo para Prosseguir ao CRUD</h5>
    </div>

    <div class="btn">
        <button class="button"><a href="/cliente">Clientes</a></button>
        <button class="button"><a href="/produto">Produtos</a></button>
        <button class="button"><a href="/loja">Lojas</a></button>
    </div>
</div>

</body>
</html>