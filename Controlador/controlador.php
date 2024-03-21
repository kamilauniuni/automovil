<?php
class Controlador
{
    public function verPagina($ruta)
    {
        require_once $ruta;
    }

    public function agregarAuto($pla, $mar, $mod, $col)
    {
        $auto = new Auto(
            $pla,
            $mar,
            $mod,
            $col,
            "Solicitada",
            "Ninguna"
        );
        $gestorAutomoviles = new GestorAuto();
        $registros = $gestorAutomoviles->agregarAuto($auto);
        if ($registros > 0) {
            echo "Se insertó el auto correctamente.";
        } else {
            echo "Error al ingresar el auto.";
        }
    }

    public function cargarAuto()
    {
        $gestorAutos = new GestorAuto();
        require_once 'Vista/html/asignar.php';
    }

    public function cargarAsignar()
    {
        $gestorAutos = new GestorAuto();
        $result = $gestorAutos->consultarMarca();
        $result2 = $gestorAutos->consultarModelo();
        require_once 'Vista/html/asignar.php';
    }

    public function consultarAuto($pla)
    {
        $gestorAutos = new GestorAuto();
        $result = $gestorAutos->consultarPlacaPorId($pla);
        require_once 'Vista/html/consultarAutos.php';
    }



    public function verAuto($pla)
    {
        $gestorAutos = new GestorAuto();
        $result = $gestorAutos->consultarPlacaPorId($pla);
        require_once 'Vista/html/confirmarAuto.php';
    }

    public function confirmarCancelarAuto($pla)
    {
        $gestorAutos = new GestorAuto();
        $registros = $gestorAutos->cancelarAutomovil($pla);
        if ($registros > 0) {
            echo "Se canceló el auto con éxito.";
        } else {
            echo "Hubo un error al cancelar el auto.";
        }
    }

   

    public function actualizarAuto($placa, $marca, $modelo, $color) {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $autoActualizado = new Auto($placa, $marca, $modelo, $color);
            
            $gestorAuto = new GestorAuto();
            
            $filasAfectadas = $gestorAuto->actualizarAuto($autoActualizado);
          
            if ($filasAfectadas > 0) {
                echo "El auto ha sido actualizado exitosamente.";
            } else {
                echo "Error al actualizar el auto.";
            }
        } else {
            $this->mostrarFormularioEdicion($placa);
        }
    }
    
    

    private function mostrarFormularioEdicion($placa)
    {
    
        require_once 'Vista/html/editarAuto.php';
    }


}
?>
