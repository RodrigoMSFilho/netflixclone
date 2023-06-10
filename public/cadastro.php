<?php
include('conexao.php');
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div id="fade">
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="netflixlogo.png" alt="">
            </a>
        </div>
    </div>

    <div class="login_body">
        <div class="login_box">
            <h2>Cadastre-se</h2>
            <form action= "" method="POST">

            <div class="input_box">
                    <input required type="usuario" placeholder="Usuário" name="usuario">
                </div>

                <div class="input_box">
                    <input required type="email" placeholder="Email" name="email">
                </div>

                <div class="input_box">
                    <input required type="password" placeholder="Senha" name="senha">
                </div>

                <div>
               

                <?php if(isset($_POST['usuario']) || isset($_POST['email']) || isset($_POST['senha'])) {

if(strlen($_POST['usuario']) == 0) {
    echo "Preencha seu usuário";
} else if(strlen($_POST['email']) == 0) {
    echo "Preencha seu e-mail";
} 
  else if(strlen($_POST['senha']) == 0) {
    echo "Preencha sua senha";
  }
else {

    $usuario = $mysqli->real_escape_string($_POST['usuario']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "INSERT INTO user (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    header("Location: http://localhost/netflixclone/public/login.php");
}
} 
?>


                    <button class="submit" name="cadastrar">Cadastrar</button>
 
                </div>
            </form>


            


            </div>
        </div>
    </div>
    </div>

</body>


</html>