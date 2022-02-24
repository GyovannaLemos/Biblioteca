<?php
include_once("../model/conexao.php");
include_once("../model/modelLogin.php");

extract($_REQUEST, EXTR_OVERWRITE);

if (InserirLogin($conexao, $Email_Login, $Senha_Login)) {
    header("Location: ../view/cadLogin.php");
} else {
    header("Location: ../view/cadLogin.php");
}
