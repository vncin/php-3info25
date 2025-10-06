<?php

require "../config/db_connect.php";

$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];

$sqlInsert = "INSERT INTO aluno(nome, data_nasc) 
VALUES('$nome', '$data_nasc')";

$pdo->exec($sqlInsert);