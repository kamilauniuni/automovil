<?php
class Auto
{
    private $placa;
    private $marca;
    private $modelo;
    private $color;

    public function __construct($pla, $mar, $mod, $col)
    {
        $this->placa = $pla;
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->color = $col;
    }

    public function actualizar($marca, $modelo, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    public function obtenerDetalles()
    {
        return array(
            'marca' => $this->marca,
            'modelo' => $this->modelo,
            'color' => $this->color
        );
    }

    public function obtenerPlaca()
    {
        return $this->placa;
    }

    public function obtenerMarca()
    {
        return $this->marca;
    }

    public function obtenerModelo()
    {
        return $this->modelo;
    }

    public function obtenerColor()
    {
        return $this->color;
    }
}
?>
