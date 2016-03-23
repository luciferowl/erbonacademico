<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
        <?php
        $usuario = $_POST['usuario'];
        $senhalog = $_POST['senhalog'];
        $conn = new PDO("mysql:host=localhost;dbname=erbon", "root");
        $logar = $conn->prepare("SELECT * FROM usuario  WHERE usuario = ?");
        $logar->bindValue(1, $usuario);
        $logar->execute();
        $sql_user_r = $logar->rowCount();
        var_dump($sql_user_r);
        if ($sql_user_r > 0) {
            $dados_user = $logar->fetch(PDO::FETCH_OBJ);
            $user_name = $dados_user->nome_usuario;
            $password = $dados_user->senha;

            if ($senhalog == $password) {
                echo 'funcionou';
            } else {
                echo "nao funcionou";
            }
        }
        ?>

    </body>
</html>
