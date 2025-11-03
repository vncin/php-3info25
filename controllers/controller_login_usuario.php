<?php

require_once "../config/db_connect.php";

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sqlVerificaUsuario = "SELECT nome, cpf, senha FROM usuario WHERE cpf = $cpf AND senha = $senha;";

$verificaUsuario = $pdo->query($sqlVerificaUsuario);
$result = $verificaUsuario->fetch(PDO::FETCH_ASSOC);

if($result){
    session_start(); //iniciando uma sessão PHP
    $_SESSION['nome_usuario'] = $result['nome'];
    header("Location: ../views/view_cadastro_aluno.php");
}else{
    header("Location: ../views/view_login.php");
}


