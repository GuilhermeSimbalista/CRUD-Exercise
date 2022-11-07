<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script>
        function confirma() {
            if(!confirm('Deseja excluir o registro?')){
                return false;
            }
                return true;   
        }
    </script>

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
        <?php echo anchor(base_url('cliente/create'), 'Novo Cliente', ['class' => 'btn btn-success mb-3']) ?> 
        <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Nome de usuario</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
        <?php foreach($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['id'] ?></td>
                <td><?php echo $cliente['name'] ?></td>
                <td><?php echo $cliente['username'] ?></td>
                <td><?php echo $cliente['cpf'] ?></td>
                <td><?php echo $cliente['email'] ?></td>
                <td><?php echo $cliente['data_nascimento'] ?></td>
                <td>
                    <?php echo anchor('cliente/edit/' .$cliente['id'], 'Editar') ?>
                    -
                    <?php echo anchor('cliente/delete/' .$cliente['id'], 'Excluir', ['onclick' => 'return confirma()']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>