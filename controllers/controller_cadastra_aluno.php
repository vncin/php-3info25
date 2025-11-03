<?php

require "../config/db_connect.php"; //arquivo de conexão com o banco de dados

$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];

$sqlInsert = "INSERT INTO aluno(nome, data_nasc, situacao) 
VALUES(:nome, :data_nasc, :situacao)";

$sqlPrepare = $pdo->prepare($sqlInsert);
$sqlPrepare->bindValue(':nome', $nome, PDO::PARAM_STR);
$sqlPrepare->bindValue(':data_nasc', $data_nasc);
$sqlPrepare->bindValue(':situacao', '1', PDO::PARAM_STR_CHAR);

if($sqlPrepare->execute()){
    header("Location: /php-3info25/views/view_cadastro_aluno.php?sucesso=1");
}else{
    header("Location: /php-3info25/views/view_cadastro_aluno.php?sucesso=0");
}

