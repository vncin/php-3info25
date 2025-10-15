<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php-3info25/views/css/style_login_usuario.css">
    <title>Login - Sistema</title>
</head>
<body>
    <section class="principal">
    <form action="/php-3info25/controllers/controller_login_usuario.php" method="POST" class="principal-form">
        <div class="login-input">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="" placeholder="CPF">
        </div>
        <div class="login-input">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="" placeholder="Senha">
        </div>
        <input type="submit" class="btn-login" value="Login">
    </form>
    </section>
</body>
</html>