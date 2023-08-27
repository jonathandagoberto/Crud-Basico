<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ingresar Autor</title>
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
    <form action="../Controlador/administrar_autor.php" method="post">
        <table>
            <tr>
                <td><label for="nombre">Nombre autor:</label></td>
                <td><input type="text" id="nombre" name="nombre"></td>
            </tr>
            <tr>
                <td><label for="apellido">Apellido:</label></td>
                <td><input type="text" id="apellido" name="apellido"></td>
            </tr>
            <tr>
                <td><label for="direccion">Dirección:</label></td>
                <td><input type="text" id="direccion" name="direccion"></td>
            </tr>
            <tr>
                <td><label for="telefono">Teléfono:</label></td>
                <td><input type="text" id="telefono" name="telefono"></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
                <td><label for="ciudad">Ciudad:</label></td>
                <td><input type="text" id="ciudad" name="ciudad"></td>
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
