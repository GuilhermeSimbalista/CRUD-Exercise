<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Mensagem</title>
</head>
<body>
    <div class="container mt-5">

    <div class="alert alert-info">
        <?php echo $message; ?>
        <p class="mt-3"><?php echo anchor (base_url(), 'Pagina Inicial')?></p>
    </div>
    </div>
</body>
</html>