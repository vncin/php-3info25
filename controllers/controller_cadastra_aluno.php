<?php

require "../config/db_connect.php";

$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];

$sqlInsert = "INSERT INTO aluno(nome, data_nasc, situacao) 
VALUES('$nome', '$data_nasc', '1')";

if($pdo->exec($sqlInsert)){
    header("Location: ../index.php?sucesso=1");
}else{
    header("Location: ../index.php?sucesso=0");
}

