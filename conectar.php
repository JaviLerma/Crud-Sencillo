<?php

class conectar
{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'crud';

    public function conexion()
    {
        $conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($conexion->connect_error) {
            die("Error");
        }
        return $conexion;
    }
}
