<?php
class GestorAuto
{




    public function agregarAuto(Auto $auto)
    {
        $conexion = new Conexion();
        $conexion->abrir();
    
        $placa = $auto->obtenerPlaca();
        $marca = $auto->obtenerMarca();
        $modelo = $auto->obtenerModelo();
        $color = $auto->obtenerColor();
    
        $sql = "INSERT INTO automovil VALUES ('$placa','$marca','$modelo','$color')";
    
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();

        return $filasAfectadas;
    }
    

    public function consultarPlacaPorId($placa)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM automovil WHERE autPlaca = '$placa'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }


    public function cancelarAutomovil($pla)
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "UPDATE automovil SET autPlaca = 'Cancelado' WHERE autPlaca = '$pla'";
    
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas(); 
        $conexion->cerrar();
        return $filasAfectadas;
    }
   
    public function consultarMarca()
{
    $conexion = new Conexion();
    $conexion->abrir();
    $sql = "SELECT * FROM automovil ";
    $result = $conexion->obtenerResult($sql); 
    $conexion->cerrar();
    return $result;
}


    public function consultarModelo()
    {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM automovil ";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult($sql);
        $conexion->cerrar();
        return $result;
    }
   

    public function actualizarAuto(Auto $auto)
    {
        $conexion = new Conexion();
        $conexion->abrir();
    
        $placa = $auto->obtenerPlaca();
        $marca = $auto->obtenerMarca();
        $modelo = $auto->obtenerModelo();
        $color = $auto->obtenerColor();
    
        
        $sql = "UPDATE automovil SET autMarca = '$marca', autModelo = '$modelo', autColor = '$color' WHERE autPlaca = '$placa'";
    
      
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
    
        $conexion->cerrar();
    
        return $filasAfectadas;
    }
    
}

