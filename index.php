<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro PHP</title>
</head>
<body>  
    <form action="cadastra_aluno.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>

        <label for="data_nasc">Data de Nascimento: </label>
        <input type="date" name="data_nasc" id="data_nasc" required>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

