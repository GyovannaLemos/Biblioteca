<?php

function InserirLivros($conexao, $Titulo, $Editora, $Foto, $Autores){

    $query = "insert into Tb_Biblioteca(Titulo, Editora, Foto, Autores)
    values('{$Titulo}', '{$Editora}', '{$Foto}', '{$Autores}')";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

?>