<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/css/style_cadastro_aluno.css">
    <title>Alunos - Emails</title>
</head>

<body>
    <section class="principal">
        <form action="/php-3info25/controllers/controller_cadastra_aluno.php" method="POST" class="principal-form">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome" required>

            <label for="data_nasc">Data de Nascimento: </label>
            <input type="date" name="data_nasc" id="data_nasc" required>

            <input type="submit" value="Enviar" class="btn-enviar">
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
        <a href="/php-3info25/controllers/controller_lista_alunos.php" class="principal-link-lista">Lista de Alunos</a>
    </section>
</body>

</html>