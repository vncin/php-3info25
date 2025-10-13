<?php

$nome = $_POST['nome'];
$data_nasc = $_POST['data_nasc'];
$id_aluno = $_POST['id_aluno'];

$atualizaAlunos = "UPDATE aluno SET nome = '$nome' AND data_nasc = '$data_nasc' WHERE id_aluno = $id_aluno";