<?php
include "conexion.php";
//if (!empty($_GET["id"])) {
$id = $_GET ["id"];
$sql = $conexion ->query ("SELECT * from libro where Id_libro = $id ");
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Modificar</title>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
        <h2 class= "text-center text-secondary"> Modificar libro </h2>
        <input type= "hidden" name= "id" value="<?= $_GET["id"]?>">

        <?php
        include"modificar.php";
        while ($datos=$sql->fetch_object()){
             ?>

        <div class="mb-3">
            <br>
             <label for="exampleInputEmail1" class="form-label">Título del libro: </label>
             <input type="text" class="form-control" name= "titulo" value="<?= $datos->titulo?>">
        </div>
        <div class="mb-3">
             <label for="exampleInputAutor1" class="form-label">Autor: </label>
             <input type="text" class="form-control" name= "autor" value="<?= $datos->autor?>">
        </div>
        <div class="mb-3">
             <label for="exampleInputPaginas1" class="form-label">Número de páginas: </label>
             <input type="int" class="form-control" name= "paginas" value="<?= $datos-> numero_paginas?>">
        </div>
        <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Año de publicación: </label>
             <input type="int" class="form-control" name= "año" value="<?= $datos->año_publicacion?>">
        </div>
        <?php }
        ?>

        
        <button type="submit" class="btn btn-primary" name= "btnregistrar" value="ok">Modificar</button>
    </form>
</body>
</html>