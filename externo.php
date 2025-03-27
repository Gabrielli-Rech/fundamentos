<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página HTML com PHP Externo</title>
</head>
<body>
    <h1>Chamando um arquivo PHP externo</h1>
    <p>Aqui está a saida do arquivo PHP externo:</p>
    <?php
    include 'arquivo-externo.php';
    ?>
    <p>Fim da saída do PHP externo.</p>
</body>
</html>