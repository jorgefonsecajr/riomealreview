<?php

$usuario = 'root';
$senha = '';
$database = 'rmr';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha na conexão ao banco de dados: ");
}