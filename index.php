<?php
require_once 'Controlador/controlador.php';
require_once 'Modelo/GestorAuto.php';
require_once 'Modelo/Auto.php';
require_once 'Modelo/Conexion.php';

$controlador = new Controlador();

if (isset($_GET["accion"])) {
    if ($_GET["accion"] == "asignar") {
        $controlador->cargarAsignar();
    } elseif ($_GET["accion"] == "consultar") {
        $controlador->verPagina('Vista/html/consultar.php');
    } elseif ($_GET["accion"] == "cancelar") {
        $controlador->verPagina('Vista/html/cancelar.php');
    } elseif ($_GET["accion"] == "ingresarAuto") {
        $controlador->agregarAuto(
            $_POST["autPlaca"],
            $_POST["autMarca"],
            $_POST["autModelo"],
            $_POST["autColor"],
        );
    } elseif ($_GET["accion"] == "verAuto") {
        if (isset($_GET["placa"])) {
            $controlador->verAuto($_GET["placa"]);
        } else {
            echo "La placa no está definida.";
        }
    } elseif ($_GET["accion"] == "cancelarAutomovil") {
        if (isset($_GET["cancelarPlaca"])) {
            $controlador->cancelarAutomovil($_GET["cancelarPlaca"]);
        } else {
            echo "La placa a cancelar no está definida.";
        }
    } elseif ($_GET["accion"] == "consultarAuto") {
        if (isset($_GET["consultarPlaca"])) {
            
            $controlador->consultarAuto($_GET["consultarPlaca"]);
        } else {
            echo "La placa a consultar no está definida.";
        }
    } elseif ($_GET["accion"] == "confirmarCancelar") {
        if (isset($_GET["cancelarPlaca"])) {
        $controlador->confirmarCancelarAuto($_GET["cancelarPlaca"]);
    } else {
        echo "La placa a cancelar no está definida.";
    }
    } elseif ($_GET["accion"] == "manejarSolicitudEdicionAuto") {
        if (isset($_GET["placa"])) { 
            $placa = isset($_GET["placa"]) ? $_GET["placa"] : "";
            $marca = isset($_POST["marca"]) ? $_POST["marca"] : "";
            $modelo = isset($_POST["modelo"]) ? $_POST["modelo"] : "";
            $color = isset($_POST["color"]) ? $_POST["color"] : "";
        
            $controlador->actualizarAuto($placa, $marca, $modelo, $color);
        } else {
            echo "La placa para editar no está definida.";
        }
    } else {
        echo "Se esperaba una solicitud para editar el auto.";
    }
} else {
    $controlador->verPagina('Vista/html/inicio.php');
}
?>
