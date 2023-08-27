<?php
// Incluye la clase Autor y CrudAutor
require_once('crud_autor.php');
require_once('../Modelo/Autor.php');

$crud = new CrudAutor();
$autor = new Autor();

// Si el elemento 'insertar' no es nulo, llama al CRUD e inserta un autor.
if (isset($_POST['insertar'])) {
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);
    // Llama a la función insertar definida en el CRUD
    $crud->insertar($autor);
    header('Location: ../Vista/index.php');
} 
// Si el elemento 'actualizar' no es nulo, llama al CRUD y actualiza el autor.
elseif (isset($_POST['actualizar'])) {
    $autor->setId($_POST['id']);
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);
    $crud->actualizar($autor);
    header('Location: ../Vista/index.php');
} 
// Si la variable 'accion' enviada por GET es igual a 'e', llama al CRUD y elimina un autor.
elseif ($_GET['accion'] == 'e') {
    $crud->eliminar($_GET['id']);
    header('Location: ../Vista/index.php');
} 
// Si la variable 'accion' enviada por GET es igual a 'a', redirige a la página actualizar.php.
elseif ($_GET['accion'] == 'a') {
    header('Location: ../Vista/actualizar.php');
}
?>
