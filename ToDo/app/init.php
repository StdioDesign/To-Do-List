<?php

session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=dbdesafio; host=localhost:3303', 'root', '');

// ERRO
if(!isset($_SESSION['user_id'])) {
    die('Erro de conexão com oo Banco de Dados');
}
