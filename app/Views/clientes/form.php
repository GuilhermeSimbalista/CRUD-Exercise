<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>

<!-- NavBar -->

<nav class="navbar navbar-expand-lg bg-light">
<div class="container-md">
    <a class="navbar-brand fs-3" href="/">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link fs-3" aria-current="page" href="/cliente">Cliente</a>
        </li>
        <li class="nav-item">
        <a class="nav-link fs-3" href="/produto">Produto</a>
        </li>
        <li class="nav-item">
        <a class="nav-link fs-3" href="/loja">Lojas</a>
        </li>
    </ul>
    </div>
</div>
</nav>

    <div class="container mt-5">
        <?php echo form_open('cliente/store') ?>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" value="<?php echo isset($cliente['name']) ? $cliente['name'] : '' ?>" 
            name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="username">Nome de Usuario</label>
            <input type="text" value="<?php echo isset($cliente['username']) ? $cliente['username'] : '' ?>"
            name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" value="<?php echo isset($cliente['cpf']) ? $cliente['cpf'] : '' ?>" 
            name="cpf" id="cpf" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" value="<?php echo isset($cliente['email']) ? $cliente['email'] : '' ?>" 
            name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="data_nascimento">Data de nascimento</label>
            <input type="date" value="<?php echo isset($cliente['data_nascimento']) ? 
            $cliente['data_nascimento'] : '' ?>" name="data_nascimento" id="data_nascimento" class="form-control">
        </div>
        <input type="submit" value="Salvar" class="btn btn-primary">
        <input type="hidden" name="id" value="<?php echo isset($cliente['id']) ? $cliente['id'] : '' ?>">
        <?php echo form_close(); ?>
    </div>
</body>
</html>