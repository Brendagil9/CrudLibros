<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["paginas"]) and !empty($_POST["año"]))   {
        $id=$_POST["id"];
        $titulo=$_POST["titulo"];
        $autor=$_POST["autor"];
        $paginas=$_POST["paginas"];
        $año=$_POST["año"];
        $sql=$conexion->query("update libro set titulo='$titulo', autor='$autor', numero_paginas= $paginas, año_publicacion=$año where Id_libro=$id");
    if ($sql==1) {
        header ("location:index.php");
    } else {
        echo "<div class= 'alert alert-danger'>Error al modificar libro </div>";
    }
    
    
    
    }else{
        echo "<div class= 'alert alert-warning'> Campos vacíos</div>";
        }
    # code...
}


?>