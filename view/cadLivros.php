<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <form action="../control/inserirLivros.php" method="POST">
        Titulo:
            <input type="text" for="Titulo" name="Titulo">

        Editora:
            <input type="text" for="Editora" name="Editora">
            
        Foto:
            <input type="text" for="Foto" name="Foto">

        Autores:
            <input type="text" for="Autores" name="Autores">
        
        <button class="btn btn-primary" type="submit"> Enviar</button>
    </form>
</body>
</html>