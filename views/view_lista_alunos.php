<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_lista_alunos.css">
    <title>Lista de Alunos</title>
</head>
<body>
    <section class="principal">
        <table class="principal-tabela">
            <thead>
                <th>ID Aluno</th>
                <th>Nome </th>
                <th>Data de Nascimento</th>
            </thead>
            <tbody>
                <?php
                foreach($resultListaAlunos as $aluno){ ?>
                <tr>
                    <td><?= htmlspecialchars($aluno['id_aluno']) ?> </td>
                    <td><?= htmlspecialchars($aluno['nome']) ?></td>
                    <td><?= htmlspecialchars($aluno['data_nasc']) ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </section>
</body>
</html>