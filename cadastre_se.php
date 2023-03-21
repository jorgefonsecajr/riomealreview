<?php

session_start();
include('./bd/conexao.php');


$email = $_POST['email'];
$senha_cadastro = $_POST['senha'];
$cpf = intval($_POST['cpf']);
$nome = $_POST['nome'];
$nascimento = $_POST['dataNascimento'];
$hashSenha = hash('sha512', $senha_cadastro);


$mysqli = new mysqli($hostname, $usuario, $senha, $database);
if ($mysqli->connect_errno) {
    echo "Erro ao conectar ao BD";
} 

$sql = "insert into clientes (email, senha, cpf, nome, nascimento) 
values ('$email', '$hashSenha', $cpf, '$nome', '$nascimento')";

$resultadoQuery = $mysqli->query($sql);

if ($resultadoQuery) {
    header('location: restaurantes.php');
} else {
    echo "Falha ao realizar o cadastro. Tente novamente!";
}

