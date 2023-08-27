<?php
// Incluye la clase Libro y CrudLibro
require_once('crud_libro.php');
require_once('../Modelo/libro.php');

$crud = new CrudLibro();
$libro = new Libro();

// Si el elemento 'insertar' no es nulo, llama al CRUD e inserta un libro.
if (isset($_POST['insertar'])) {
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']); // Agregar autor
    $libro->setGenero($_POST['genero']);
    // Llama a la función insertar definida en el CRUD
    $crud->insertar($libro);
    header('Location: ../Vista/index.php');
} 
// Si el elemento 'actualizar' no es nulo, llama al CRUD y actualiza el libro.
elseif (isset($_POST['actualizar'])) {
    $libro->setId($_POST['id']);
    $libro->setNombre($_POST['nombre']);
    $libro->setAutor($_POST['autor']); // Agregar autor
    $libro->setGenero($_POST['genero']);
    $crud->actualizar($libro);
    header('Location: ../Vista/index.php');
} 
// Si la variable 'accion' enviada por GET es igual a 'e', llama al CRUD y elimina un libro.
elseif ($_GET['accion'] == 'e') {
    $crud->eliminar($_GET['id']);
    header('Location: ../Vista/index.php');
} 
// Si la variable 'accion' enviada por GET es igual a 'a', redirige a la página actualizar.php.
elseif ($_GET['accion'] == 'a') {
    header('Location: ../Vista/actualizar.php');
}
?>

