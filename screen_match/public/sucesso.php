<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
</head>

<body>
    <h1>SUCESSO!!!! Filme <?= $_GET['filme'] ?> INSERIDO</h1>

    <h2>DADOS SOBRE O FILME:</h2>
    <?php
     $arquivo = file_get_contents(__DIR__."/filme.json");
     $dadosJson = json_decode($arquivo,true);
    ?>

    <table>
        <tr>
            <td>NOME: </td>
            <td><?= $dadosJson['nome'] ?></td>
        </tr>
        <tr>
            <td>ANO DE LANÇAMENTO:</td>
            <td><?= $dadosJson['anoLancamento'] ?></td>
        </tr>
        <tr>
            <td>NOTA:</td>
            <td><?= $dadosJson['nota'] ?></td>
        </tr>
        <tr>
            <td>GÊNERO:</td>
            <td><?= $dadosJson['genero'] ?></td>
        </tr>
    </table>


</body>

</html>