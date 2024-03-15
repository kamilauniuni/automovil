<!DOCTYPE html>
<html>

<head>
    <title>Automovil</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <script src="Vista/jquery/jquery.js" type="text/javascript"></script>
    <script src="Vista/js/script.js"></script>
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Automovil</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?accion=asignar">Asignar</a></li>
            <li><a href="index.php?accion=consultar">Consultar Autos</a></li>
       
        </ul>
        <div id="contenido">
            <h2>consultar Auto</h2>

            <form action="" method="post" id="frmconsultar">
                <table>
                    <tr>
                        <td>placa del carro</td>
                        <td><input type="text" name="placa" id="placa"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="button" name="consultarConsultar" value="Consultar"
                                id="consultarConsultar" onclick="consultarAuto()"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="carros2"></div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    </div>

</body>


</html>