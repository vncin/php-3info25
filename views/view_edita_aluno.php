<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastro_aluno.css">
    <title>Alunos - Emails</title>
</head>

<body>
    <section class="principal">
        <?php
            require_once "../config/db_connect.php";
            
            $id_aluno = $_GET['id_aluno'];
            $sqlSelecionaAluno = "SELECT * FROM aluno WHERE id_aluno = $id_aluno";
            $resultSelecionaAluno = $pdo->query($sqlSelecionaAluno);
            $aluno = $resultSelecionaAluno->fetch(PDO::FETCH_ASSOC);
        ?>
        <h1 class="titulo">Editar Aluno</h1>
        <form action="/php-3info25/controllers/controller_atualiza_aluno.php" method="POST" class="principal-form">
            <input type="hidden" name="id_aluno" value="<?= $aluno['id_aluno']?>" >

            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" required value="<?= $aluno['nome']?>"> 

            <label for="data_nasc">Data de Nascimento: </label>
            <input type="date" name="data_nasc" id="data_nasc" required value="<?= $aluno['data_nasc']?>">

            <input type="submit" value="Editar" class="btn-enviar">
        <?php 
            if(isset($_GET['sucesso'])){
                if($_GET['sucesso'] == 1){
                    echo "<p class='msg-retorno-sucesso'> Cadastro realizado com sucesso! </p>";
                }else{
                    echo "<p class='msg-retorno-erro'> Erro na realização do cadastro! </p>";
                }
            }
            
        ?>
        </form>
    </section>
</body>

</html>