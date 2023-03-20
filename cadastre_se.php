<?php

session_start();
require 'conexoes.php';


$email = $_POST['email'];
$senha_cadastro = $_POST['senha'];
$cpf = intval($_POST['cpf']);
$nome = $_POST['nome'];
$nascimento = $_POST['dataNascimento'];
$hashSenha = hash('sha512', $senha_cadastro);


$conexao = conectarBD();
if ($conexao->connect_errno) {
    header('location: paginaErrorBD.html');
}

$sql = "insert into clientes (email, senha, cpf, nome, nascimento) 
values ('$email', '$hashSenha', $cpf, '$nome', '$nascimento')";

$resultadoQuery = $conexao->query($sql);
desconectarBD($conexao);


if ($resultadoQuery) {
    header('location: projeto_senac.html');
} else {
    $msg = "Falha ao realizar o cadastro. Tente novamente!";
}

