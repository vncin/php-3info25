<?php

require_once "../config/db_connect.php";

$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$id_aluno = $_POST['id_aluno'];

$sqlAtualizaAluno = "UPDATE aluno SET nome = :nome, data_nasc = :data_nasc WHERE id_aluno = :id_aluno";
$sqlPrepare = $pdo->prepare($sqlAtualizaAluno);
$sqlPrepare->bindValue(':nome', $nome, PDO::PARAM_STR);
$sqlPrepare->bindValue(':data_nasc', $data_nasc);
$sqlPrepare->bindValue(':id_aluno', $id_aluno, PDO::PARAM_INT);

if($sqlPrepare->execute()){
    header("Location: /php-3info25/controllers/controller_lista_alunos.php");
}else{
    header("Location: /php-3info25/controllers/controller_lista_alunos.php");
}