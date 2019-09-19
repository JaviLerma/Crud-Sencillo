<?php
require_once "conectar.php";
require_once "personas.php";

?>


<!DOCTYPE html>

<head>
    <title>CRUD</title>
</head>

<body>

    <h1>CRUD</h1>

    <form action="acciones.php" method="POST">
        <label>Nombre: </label>
        <input type="text" name="nombre">
        <label>Apellido: </label>
        <input type="text" name="apellido">
        <button type="submit" name="insertar">Guardar</button>
    </form>

    <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>#</th>
        </tr>

        <?php
        $personas = new Personas();
        $datos = $personas->getAll();

        foreach ($datos as $persona) {
            ?>
            <tr>
                <th><?php echo $persona['id']; ?></th>
                <th><?php echo $persona['nombre']; ?></th>
                <th><?php echo $persona['apellido']; ?></th>
                <th>
                    <a href="editar.php?id=<?php echo $persona['id']; ?>">
                        <button type="button">Editar</button>
                    </a>
                    <a href="acciones.php?id=<?php echo $persona['id']; ?>&button=eliminar">
                        <button type="button">Eliminar</button>
                    </a>
                </th>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

<html>