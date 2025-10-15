<?php

require "../config/db_connect.php";

$selecionaAlunos = "SELECT * FROM aluno WHERE situacao = '1' ORDER BY nome ASC";

$result = $pdo->query($selecionaAlunos);

$resultListaAlunos = $result->fetchAll(PDO::FETCH_ASSOC);

include_once('../views/view_lista_alunos.php');
