<?php
// Incluye la clase Db
require_once('../conexion.php');

class CrudLibro {
    // Constructor de la clase
    public function __construct() {}

    // Método para insertar, recibe como parámetro un objeto de tipo libro
    public function insertar($libro) {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO libros (nombre, autor, genero) VALUES (:nombre, :autor, :genero)');
        $insert->bindValue('nombre', $libro->getNombre());
        $insert->bindValue('autor', $libro->getAutor());
        $insert->bindValue('genero', $libro->getGenero());
        $insert->execute();
    }

    // Método para mostrar todos los libros
    public function mostrar() {
        $db = Db::conectar();
        $listaLibros = [];
        $select = $db->query('SELECT * FROM libros');
        
        foreach ($select->fetchAll() as $libro) {
            $myLibro = new Libro();
            $myLibro->setId($libro['id']);
            $myLibro->setNombre($libro['nombre']);
            $myLibro->setAutor($libro['autor']);
            $myLibro->setGenero($libro['genero']);
            $listaLibros[] = $myLibro;
        }
        
        return $listaLibros;
    }

    // Método para eliminar un libro, recibe como parámetro el id del libro
    public function eliminar($id) {
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM libros WHERE ID=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    // Método para buscar un libro, recibe como parámetro el id del libro
    public function obtenerLibro($id) {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM libros WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $libro = $select->fetch();
        
        $myLibro = new Libro();
        $myLibro->setId($libro['id']);
        $myLibro->setNombre($libro['nombre']);
        $myLibro->setAutor($libro['autor']);
        $myLibro->setGenero($libro['genero']);
        return $myLibro;
    }

    // Método para actualizar un libro, recibe como parámetro el libro
    public function actualizar($libro) {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE libros SET nombre=:nombre, autor=:autor, genero=:genero WHERE ID=:id');
        $actualizar->bindValue('id', $libro->getId());
        $actualizar->bindValue('nombre', $libro->getNombre());
        $actualizar->bindValue('autor', $libro->getAutor());
        $actualizar->bindValue('genero', $libro->getGenero());
        $actualizar->execute();
    }
}
?>



