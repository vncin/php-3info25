<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login - Sistema</title>
</head>
<body>
    <section class="principal">
    <form action="/php-3info25/controllers/controller_login_usuario.php" method="POST">
        <div class="login-input">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="" placeholder="CPF">
        </div>
        <div class="login-input">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="" placeholder="Senha">
        </div>
        <input type="submit" value="Login">
    </form>
    </section>
</body>
</html>