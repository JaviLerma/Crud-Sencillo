<?php

require_once "personas.php";

if(isset($_POST['insertar'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $datos = array($nombre, $apellido);
    $persona = new Personas();
    if ($persona->insertar($datos)){
        echo "Datos insertados correcamente";
        header ("Location: index.php");
    }else{
        echo "DATOS NO GRABADOS";
    }
}

if(isset($_POST['actualizar'])){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $datos = array($nombre, $apellido, $id);
    $persona = new Personas();
    if ($persona->actualizar($datos)){
        echo "Datos insertados correcamente";
        header ("Location: index.php");
    }else{
        echo "DATOS NO GRABADOS";
    }
}

if(($_GET['button']) == "eliminar"){

    $id = $_GET['id'];

    $persona = new Personas();
    if ($persona->eliminar($id)){
        echo "Datos insertados correcamente";
        header ("Location: index.php");
    } else{
        echo "ERROR AL ELINIAR";
    }
}

?>