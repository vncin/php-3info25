<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/php-3info25/views/css/style_lista_alunos.css">
    <title>Lista de Alunos</title>
</head>

<body>
    <section class="principal">
        <nav class="principal-nav">
                    <a href="/php-3info25/views/view_cadastro_aluno.php" class="btn-voltar">Voltar</a>
                    <a href="/php-3info25/controllers/controller_logout.php" class="btn-sair">Sair</a> 
        </nav>

        <table class="principal-tabela">
            <thead>
                <th>ID Aluno</th>
                <th>Nome </th>
                <th>Data de Nascimento</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php
                if (isset($resultListaAlunos)) {
                    foreach ($resultListaAlunos as $aluno) { ?>
                        <tr>
                            <td><?= htmlspecialchars($aluno['id_aluno']) ?> </td>
                            <td><?= htmlspecialchars($aluno['nome']) ?></td>
                            <td><?= htmlspecialchars($aluno['data_nasc']) ?></td>
                            <td class="coluna-acoes">
                                <a href="/php-3info25/views/view_edita_aluno.php?id_aluno=<?= $aluno['id_aluno'] ?>" class="btn-editar">Editar</a>
                                <a href="/php-3info25/controllers/controller_status_aluno.php?id_aluno=<?= $aluno['id_aluno'] ?>" class="btn-deletar">Deletar</a>
                            </td>
                        </tr>
                <?php
                    }
                } ?>

            </tbody>
        </table>

    </section>
</body>

</html>