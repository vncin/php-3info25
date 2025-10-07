<?php

require "../config/db_connect.php";

$selecionaAlunos = "SELECT * FROM aluno";

$result = $pdo->query($selecionaAlunos);

$resultListaAlunos = $result->fetchAll(PDO::FETCH_ASSOC);

foreach($resultListaAlunos as $aluno){
    echo "ID: ".$aluno['id_aluno'];
    echo "<br>";
    echo "Nome: ".$aluno['nome'];
    echo "<br>";
    echo "Data de Nascimento:".$aluno['data_nasc'];
    echo "<br>";
}