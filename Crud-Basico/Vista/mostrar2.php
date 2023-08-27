<?php
// Incluye la clase Autor y CrudAutor
require_once("../Controlador/crud_autor.php");
require_once('../Modelo/autor.php');
$crud = new CrudAutor();
$autor = new Autor();
// Obtiene todos los autores con el método mostrar de la clase Crud
$listaAutores = $crud->mostrar();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mostrar Autores</title>
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
                <th>Apellido</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Ciudad</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaAutores as $autor) { ?>
                <tr>
                    <td><?php echo $autor->getNombre() ?></td>
                    <td><?php echo $autor->getApellido() ?></td>
                    <td><?php echo $autor->getDireccion() ?></td>
                    <td><?php echo $autor->getTelefono() ?></td>
                    <td><?php echo $autor->getEmail() ?></td>
                    <td><?php echo $autor->getCiudad() ?></td>
                    <td><a href="actualizar2.php?id=<?php echo $autor->getId()?>&accion=a">Actualizar</a></td>
                    <td><a href="../Controlador/administrar_autor.php?id=<?php echo $autor->getId()?>&accion=e">Eliminar</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="index.php">Volver</a>
</body>
</html>
