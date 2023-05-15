<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <title>Menu</title>
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
            <h2>Olá <?php echo $email ?> </h2>
            <li></li>
            <li></li>
 
                <div> 
                    <a href="http://localhost:3000/App.js/">
                <button class="submit"> Minha Conta </button>
                    </a>
                <li></li>
                </div>
                

                <div>
                    <a  href="http://localhost:3000/App.js/">
                <button class="submit"> Voltar </button>
                    </a>
                <li></li>
                </div>

                <div>
                    <a  href="http://localhost/netflixclone/public/login.php">
                <button class="submit"> Sair </button>
                    </a>
                <li></li>
                </div>


            </div>
        </div>
    </div>
    </div>

</body>

</html>