<?php 
include('./bd/conexao.php');

if(isset($POST['email']) || isset($_POST['senha'])) {
  if(strlen($_POST['email']) == 0){
    echo "Preencha seu e-mail";
  } else if(strlen($_POST['senha'] == 0)){
    echo "Preencha sua senha";
  } else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: ". $mysqli->error);
    
    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['nome'] = $usuario['nome'];

      header("Location: painel.php");

    } else {
      echo "Falha ao logar, e-mail ou senha incorretos";
    }


  }
}

?>


<!DOCTYPE html>
<html lang="PT-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <title>Rio Meal Review</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



</head>

<body class="telaFundo">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg static-top fundo">
  <div class="container">
    <a class="navbar-brand text-white" href="index.php">
      <img src="images/big-logo.png" alt="..." height="36"> Rio Meal Review
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Restaurantes</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Área de Usuário
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Login</a></li>
            <li><a class="dropdown-item" href="cadastro.php">Registro</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container w-25 mt-5">
    <h2 class="text-center text-white">Login</h2>
    <form action="" method="POST">
        <div class="row">
            <div class="mt-3">
                <input type="text" name="email" class="form-control" placeholder="E-mail" value="">
            </div>
            <div class="form-group mt-3">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
            </div>
            <div class="btn btn-block btn-sm btn-success mt-3">
                <input type="submit" value="Logar" class="btn text-white ">
            </div>

            <a href="" class="justify-content-end text-white mt-3">Esqueceu a senha</a>
            
        </div>
    </form>
</div>

</body>
</html>
