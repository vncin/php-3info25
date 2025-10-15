<?php

require_once '../config/db_connect.php';

$id_aluno = $_GET['id_aluno'];

$sqlAtualizaStatus = "UPDATE aluno SET situacao = '0' WHERE id_aluno = $id_aluno;";

$atualizaStatus = $pdo->exec($sqlAtualizaStatus);

if($atualizaStatus){
    header("Location: /php-3info25/controllers/controller_lista_alunos.php");
}else{
    header("Location: /php-3info25/controllers/controller_lista_alunos.php"); 
}
