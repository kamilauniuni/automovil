<?php
class Conexion
{
    private $mysqli;
    private $sql;
    private $result;
    private $filasAfectadas;
    private $placaId;

    public function abrir()
    {
        $this->mysqli = new mysqli("localhost", "root", "", "auto");
        if (mysqli_connect_error()) {
            return 0;
        } else {
            return 1;
        }
    }

    public function cerrar()
    {
        $this->mysqli->close();
    }
    public function consulta($sql)
    {
        $this->sql = $sql;
        $this->result = $this->mysqli->query($this->sql)
    
            or trigger_error("error de query: " . mysqli_error($this->mysqli), E_USER_ERROR);
    
        $this->filasAfectadas = $this->mysqli->affected_rows;
        $this->placaId = $this->mysqli->insert_id;
    }
    
    public function obtenerResult()
    {
        return $this->result;
    }
    public function obtenerFilasAfectadas()
    {
        return $this->filasAfectadas;
    }
    public function obtenerPlacaId()
    {
        return $this->placaId;
    }
}