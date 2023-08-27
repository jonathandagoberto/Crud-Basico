<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
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
            flex-direction: column;
        }
        header, nav, footer {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            text-align: center;
            width: 80%;
            margin: 20px auto;
        }
        nav {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        nav a {
            margin: 10px 0;
            text-decoration: none;
            color: black;
            padding: 10px 20px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a la Biblioteca</h1>
    </header>
    <nav>
        <a href="ingresar.php">Ingresar Libro</a>
        <a href="mostrar.php">Ver Libros</a>
        <a href="ingresar2.php">Ingresar Autor</a>
        <a href="mostrar2.php">Ver Autores</a>
    </nav>
    <footer>
        <p>&copy; Administración de Libros 2022</p>
    </footer>
</body>
</html>





