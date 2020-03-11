<?php
require_once "personas.php";

$id = $_GET['id'];

$persona = new Personas();
$datos = $persona->getById($id);
?>

<!DOCTYPE html>

<head>
    <title>EDITAR</title>
</head>

<body>
    <h1>Editar</h1>

    <form action="acciones.php" method="POST">
        <input type="text" name="id" hidden value="<?php echo $id ?>">
        <label>Nombre: </label>
        <input type="text" name="nombre" value="<?php echo $datos[0]; ?>">
        <label>Apellido: </label>
        <input type="text" name="apellido" value="<?php echo $datos[1]; ?>">
        <label>Edad: </label>
        <input type="number" name="edad" value="<?php echo $datos[2]; ?>">
        <button type="submit" name="actualizar">Actualizar</button>
    </form>
</body>

<html>