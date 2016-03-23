<html>
    <head>
    </head>
    <body>
        <?php

        class Inserir {

            public $nome_usuario;
            public $nome;
            public $email;
            public $senha;

            public function valor() {
                
            }

            public function salvar() {
                $nome_usuario = isset($nome_usuario) ? 1 : $_POST['nome_usuario'];
                $nome = isset($nome) ? 1 : $_POST['nome'];
                $email = isset($email) ? 1 : $_POST['email'];
                $senha = isset($senha) ? 1 : $_POST['senha'];
                $senhac = sha1($senha);
                $conn = new PDO("mysql:host=localhost;dbname=erbon", 'root');

                $sql = "INSERT INTO usuario (nome, nome_usuario, email,senha)
                VALUES ('$nome', '$nome_usuario', '$email','$senhac')";
                $conn->exec($sql);
            }

            public function delete() {
                $conn = new PDO("mysql:host=localhost;dbname=erbon", "root");
                $sql = "DELETE FROM usuario WHERE nome_usuario = 1 OR nome_usuario =' ' ";
                $conn->exec($sql);
            }

            public function logar() {
                $conn = new PDO("mysql:host=localhost;dbname=erbon", "root");
                $logar = $conn->prepare("SELECT * FROM usuario");
                $logar->execute();

                $usuario = $_POST['usuario'];
                $senhalog = $_POST['senhalog'];
                if ($usuario == 'nome_usuario') {
                    echo 'funcionou';
                } else {
                    echo 'nao funcionou';
                }
            }

            public function verificar() {
                $this->logar();
            }

        }
        ?>
    </body>
</html>