<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingresar Libro</title>
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
            width: 50%;
            text-align: center;
        }
        table {
            width: 100%;
        }
        td {
            padding: 10px;
        }
        input[type='text'] {
            width: 100%;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        select, input[type='submit'], a {
            margin-top: 10px;
            padding: 8px 12px;
            border-radius: 5px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        select {
            width: 100%;
        }
    </style>
</head>
<body>
    <form action="../Controlador/administrar_libro.php" method="post">
        <table>
            <tr>
                <td><label for="nombre">Nombre libro: </label></td>
                <td><input type="text" id="nombre" name="nombre"></td>
            </tr>
            <tr>
                <td><label for="autor">Autor:</label></td>
                <td><input type="text" id="autor" name="autor"></td>
            </tr>
            <tr>
                <td><label for="genero">Género:</label></td>
                <td>
                    <select id="genero" name="genero">
                        <option value="novela">Novela</option>
                        <option value="poesia">Poesía</option>
                        <option value="ciencia">Ciencia ficción</option>
                        <option value="historia">Historia</option>
                        <!-- Agrega más opciones de género aquí -->
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="hidden" name="insertar" value="insertar">
                    <input type="submit" value="Guardar">
                    <a href="index.php">Volver</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>


