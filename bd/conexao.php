<?php

$usuario = 'root';
$senha = '';
$database = 'rmr';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha na conexão ao banco de dados: ");
}


// fechar conexao

function desconectarBD($mysqli){
    $mysqli->close();
    $mysqli = null;


}

?>