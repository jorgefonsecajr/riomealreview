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
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Restaurantes
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastroRestaurante.php">Crie sua avaliação</a></li>
            <li><a class="dropdown-item" href="listaRestaurante.php">Avaliações</a></li>

          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Área de Usuário
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="cadastro.php">Registro</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container w-50 formulario">
        <h2 class="text-white text-center mt-5">Faça sua Avaliação</h2>
        <form class="form-group mt-2" method="POST" action="cadastre_se.php">
            <div class="form-group mt-2">
                <label for="inputNome">Nome do Restaurante:</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Digite aqui o nome do restaurante que deseja avaliar" name="nomeRestaurante">
            </div>
            <div class="form-group mt-2">
                <label for="inputEndereco" class="form-label">Endereço:</label>
                <input type="text" class="form-control" placeholder="Digite o endereço do restaurante" id="inputEndereco" name="enderecoRestaurante">
            </div>
            <div class="form-group">
                <label for="inputTextArea" class="form-label mt-2">Escreva sua Avaliação</label> <br>
                <textarea style="resize: none;" name="avaliacao" id="inputTextArea" cols="81" rows="10"></textarea>
            </div>

           
            <div class="btn btn-sm btn-success btn-block mt-4">
                <input type="submit" value="Cadastrar" class="btn text-white">
            </div>




        </form>

</body>
</html>