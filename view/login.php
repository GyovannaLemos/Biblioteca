<!DOCTYPE html>
<html lang="ept-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <section id="loginUsu">
        <form action="../control/acesso.php" method="POST">
            Email:
            <input type="email" for="Email_Login" name="Email_Login" id="Email_Login">

            Senha:
            <input type="password" for="Senha_login" name="Senha_Login" id="Senha_Login">

            <button onclick="Acessar()"> Entrar </button>
        </form>

        <p>Não possui Login? Clique <a href="./cadLogin.php"> aqui </a> e se cadastre </p>
    </section>

</body>

</html>