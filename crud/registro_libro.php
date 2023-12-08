<?php

if (!empty($_POST ["btnregistrar"])) {
    if (!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["paginas"]) and!empty($_POST["año"])) {
       
        $titulo=$_POST["titulo"];
        $autor=$_POST["autor"];
        $paginas=$_POST["paginas"];
        $año=$_POST["año"];

        $sql=$conexion->query("insert into libro (titulo, autor, numero_paginas, año_publicacion) values('$titulo','$autor','$paginas','$año')");
        if ($sql==1) {
            echo '<div id="successMessage" class="alert alert-success">Libro registrado correctamente</div>';
echo '<script>
    // Esperar 6 segundos y luego ocultar el mensaje
    setTimeout(function() {
        var successMessage = document.getElementById("successMessage");
        successMessage.style.display = "none";
    }, 3000);
</script>';

        } else {
            echo '<div class= "alert alert-danger"> Error al registrar el libro</div>';
        }
        
    }else{
    echo '<div class= "alert alert-warning"> Alguno de los campos esta vacio</div>';
    }
}
?>