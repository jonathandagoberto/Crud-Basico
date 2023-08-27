<?php
// Incluye la clase Libro y CrudLibro
require_once("../Controlador/crud_libro.php");
require_once('../Modelo/libro.php');
$crud = new CrudLibro();
$libro = new Libro();
// Obtiene todos los libros con el método mostrar de la clase Crud
$listaLibros = $crud->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar Libros</title>
    <style>
        body {
            background-image: url('../Sources/b.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        table {
            background-color: rgba(255, 255, 255, 0.8);
            border-collapse: collapse;
            width: 80%;
            text-align: center;
            margin: auto; /* Centrar la tabla */
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Género</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaLibros as $libro) { ?>
                <tr>
                    <td><?php echo $libro->getNombre() ?></td>
                    <td><?php echo $libro->getAutor() ?></td>
                    <td><?php echo $libro->getGenero() ?></td>
                    <td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a></td>
                    <td><a href="../Controlador/administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="index.php">Volver</a>
</body>
</html>

