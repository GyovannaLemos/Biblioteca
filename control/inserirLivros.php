<?php
include_once("../model/conexao.php");
include_once("../model/modelBiblioteca.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(InserirLivros($conexao, $Titulo, $Editora, $Foto, $Autores)){
    header("Location: ../view/cadLivros.php");
}else{
    header("Location: ../view/cadLivros.php");
}

?>