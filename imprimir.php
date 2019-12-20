<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once "conectar.php";
require_once "personas.php";


$html ="
<table>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Apellido</th>
</tr>
";

$personas = new Personas();
$datos = $personas->getAll();

foreach ($datos as $persona) {
    $html .="
    <tr>
        <th>".$persona['id']."</th>
        <th>".$persona['nombre']."</th>
        <th>".$persona['apellido']."</th>
    </tr>";
};
$html .= "</table> ";


// Require composer autoload

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();