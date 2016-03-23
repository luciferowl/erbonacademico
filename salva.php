<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="refresh" content="4;URL=login.php">

    </head>
    <body>
        <?php
        include 'inserir.php';
        $d = new Inserir;
        $d->salvar();
        $d->delete();
        $d->logar();
        ?>
        <div>Enviando as informa&ccedil;&otilde;es para o banco de dados</div>
    </body>
</html>