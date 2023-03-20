<?php 

if(!isset($_SESSION)){
    session_start();
}

?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Você está logado! <br>
    Bem vindo, <?php echo $_SESSION['nome']; ?>
</body>
</html>