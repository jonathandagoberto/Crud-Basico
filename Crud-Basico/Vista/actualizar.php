<?php
// Incluye la clase Libro y CrudLibro
require_once('../Controlador/crud_libro.php');
require_once('../Modelo/libro.php');
$crud = new CrudLibro();
$libro = new Libro();

// Busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
$libro = $crud->obtenerLibro($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Actualizar Libro</title>
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
        form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 50%;
            margin: auto;
        }
        table {
            width: 100%;
        }
        td {
            padding: 8px;
        }
        input[type='text'] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type='submit'], a {
            margin-top: 10px;
            padding: 8px 12px;
            border-radius: 5px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action='../Controlador/administrar_libro.php' method='post'>
        <table>
            <tr>
                <td><label for="nombre">Nombre libro:</label></td>
                <td><input type='text' id="nombre" name='nombre' value='<?php echo $libro->getNombre() ?>'></td>
            </tr>
            <tr>
                <td><label for="autor">Autor:</label></td>
                <td><input type='text' id="autor" name='autor' value='<?php echo $libro->getAutor() ?>'></td>
            </tr>
            <tr>
                <td><label for="genero">Género:</label></td>
                <td>
                    <select id="genero" name='genero'>
                        <option value='novela' <?php if ($libro->getGenero() === 'novela') echo 'selected'; ?>>Novela</option>
                        <option value='poesia' <?php if ($libro->getGenero() === 'poesia') echo 'selected'; ?>>Poesía</option>
                        <option value='ciencia' <?php if ($libro->getGenero() === 'ciencia') echo 'selected'; ?>>Ciencia ficción</option>
                        <option value='historia' <?php if ($libro->getGenero() === 'historia') echo 'selected'; ?>>Historia</option>
                        <!-- Agrega más opciones de género aquí -->
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <input type='hidden' name='id' value='<?php echo $libro->getId() ?>'>
                    <input type='hidden' name='actualizar' value='actualizar'>
                    <input type='submit' value='Guardar'>
                    <a href='index.php'>Volver</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


