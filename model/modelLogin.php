<?php

function InserirLogin($conexao, $Email_Login, $Senha_Login)
{

    $query = "insert into Tb_Login(Email_Login, Senha_Login)
    values('{$Email_Login}', '{$Senha_Login}')";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}
