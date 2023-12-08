<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #e0f7fa; /* Fondo azul claro */
             
        }

        .container-fluid {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #64b5f6; /* Fondo azul claro para el formulario */
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centrar el contenido del formulario */
        }

        h1 {
            margin-bottom: 0; /* Elimina el margen inferior del título */
            color: #ffffff; /* Texto blanco */
        }

        h3, .form-label {
            color: #ffffff; /* Texto blanco */
        }

        .form-control {
            border: 2px solid #ffffff; /* Borde blanco */
            border-radius: 8px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #b3e0ff; /* Cambia el color al enfocar */
        }

        .btn-primary {
            background-color: #1976d2; /* Azul de material design */
            border: 2px solid #1976d2;
            border-radius: 10px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0d47a1; /* Azul más oscuro al pasar el ratón */
            border-color: #0d47a1;
        }
    </style>
    <title>CRUD Brenda Gil Vázquez </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://kit.fontawesome.com/1a1efc839f.js" crossorigin="anonymous"></script>
  </head>
<body>
    <script>
        function eliminar(){
            var respuesta= confirm ("¿Estás seguro que deseas eliminar?");
            return respuesta
        }
    </script>
<h1 class="p-3" style="color: #d81b60; text-align: center; font-size: 3em; font-weight: bold; text-transform: uppercase; letter-spacing: 3px; font-family: 'Pacifico', cursive;">Libros en una biblioteca</h1>

    <?php
        include "conexion.php";
        include "eliminar_libro.php";
        ?>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class= "text-center text-secondary"> Registro de libros </h3>
        <?php
        include "conexion.php";
        include "registro_libro.php";
       // include "modificar_libro.php";
        ?>
        <div class="mb-3">
            <br>
             <label for="exampleInputEmail1" class="form-label">Título del libro: </label>
             <input type="text" class="form-control" name= "titulo">
        </div>
        <div class="mb-3">
             <label for="exampleInputAutor1" class="form-label">Autor: </label>
             <input type="text" class="form-control" name= "autor">
        </div>
        <div class="mb-3">
             <label for="exampleInputPaginas1" class="form-label">Número de páginas: </label>
             <input type="int" class="form-control" name= "paginas">
        </div>
        <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Año de publicación: </label>
             <input type="int" class="form-control" name= "año">
        </div>
        <button type="submit" class="btn btn-primary" name= "btnregistrar" value="ok">Registrar</button>
    </form>
    <div class="col-8 p-4">
        <table class="table">
            <thead class="bg-info">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Título del libro</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Número de páginas</th>
                    <th scope="col">Año de edición</th>
                    <th scope="col"></th>
                 </tr>
             </thead>
             <tbody>
                <?php
                include "conexion.php";
                $sql=$conexion->query ("select * FROM libro");
                while ($datos=$sql->fetch_object()){ ?>
                <tr>
                    <td><?= $datos->Id_libro ?></td>
                    <td><?= $datos->titulo ?></td>
                    <td><?= $datos->autor ?></td>
                    <td><?= $datos->numero_paginas?></td>
                    <td><?= $datos->año_publicacion?></td>
                    
                    <td>
                    <a href="modificar_lib.php?id=<?= $datos->Id_libro ?>" class="btn btn-small btn-primary">
    <i class="fa-solid fa-pen" style="color: #64b5f6;"></i>
</a>


                        <a onclick ="return eliminar()" href="index.php?id=<?= $datos->Id_libro ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
            
                    </td>
                </tr>
                <?php }
                ?>          

  </tbody>
</table>
    </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>