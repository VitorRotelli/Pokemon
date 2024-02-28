<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/css/tema.css">
    <link rel="stylesheet" href="components/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once("components/itens/tema.php");
    ?>

    <header class="header-login">
        <img src="components/img/elementos/logo/logo.png" width="350px" alt="">
    </header>

    <div class="card-login">
        <h1>Login</h1>
        <div class="itens-login">
            <label for="login-email">Email
                <input type="text" id="login-email" name="email">
            </label>
            <label for="login-senha">Senha
                <input type="text" id="login-senha" name="senha">
            </label>
            <button id="login-button" class="button_login">Entrar</button>
            <a class="a_login" href="cadastro.php">
                <span class="pokebola esquerda"></span>
                <span class="pokebola direita"></span>
                    Cadastrar seu treinador Pokemon
            </a>
        </div>
    </div>
</body>

</html>