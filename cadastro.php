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
                <img src="./images/big-logo.png" alt="..." height="36"> Rio Meal Review
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
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="cadastro.php">Registro</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container w-50 formulario">
        <form class="row g-3 mt-5" method="POST" action="cadastro.php">
            <div class="form-group ">
                <label for="inputNome">Nome:</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Digite aqui seu nome" name="nome">
            </div>
            <div class="col-md-6 ">
                <label for="inputEmail4" class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="Digite aqui seu Email" id="inputEmail4" name="email">
            </div>
            <div class="col-md-6 ">
                <label for="inputPassword4" class="form-label">Senha:</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="********" name="senha">
            </div>

            <div class="col-md-6 ">
                <label for="inputCpf" class="form-label">CPF:</label>
                <input type="number" class="form-control" id="inputCpf" placeholder="Apenas números" name="cpf">
            </div>
            <div class="col-md-6 ">
                <label for="inputDtn" class="form-label">Data de Nascimento:</label>
                <input type="date" class="form-control" id="inputDtn" name="dataNascimento">
            </div>

            <div class="btn btn-sm btn-success btn-block mt-4">
                <input type="submit" value="Cadastrar" class="btn text-white">
            </div>




        </form>
    </div>

</body>