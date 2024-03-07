<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>

    <form action="acao.php" method="post">
        <pre>

        <label for="">Nome</label>
        <input type="text" name="nome" id="">

        <label for="">Telefone</label>
        <input type="text" name="telefone" id="">

        <input type="submit" value="Enviar">    <input type="reset" value="LImpar">
        </pre>
    </form>

    <form action="acao2.php" method="post">
        <pre>
        <label for="">Edenreço</label>
        <input type="text" name="endereco" id="">
            
        <label for="">E-mail</label>
        <input type="text" name="email" id="">

        <input type="submit" value="Enviar">    <input type="reset" value="LImpar">
        </pre>
    </form>

<?php
?>
</body>
</html>
