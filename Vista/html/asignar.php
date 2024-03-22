<!DOCTYPE html>
<html>

<head>
    <title>Automóviles</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    <script src="Vista/jquery/jquery.js" type="text/javascript"></script>
    <script src="Vista/jquery/jquery-ui-1.12.1/jquery-ui.js" type="text/javascript"></script>
    <link href="Vista/jquery/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script src="Vista/js/script.js" type="text/javascript"></script>
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h2>Ingresar Auto </h2>
        </div>
        <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?accion=asignar">Asignar</a></li>
            <li><a href="index.php?accion=consultar">Consultar Autos</a></li>

        </ul>
        <div id="contenido">
            <h2>Formulario Automóviles</h2>
            <div id="frmAuto" title="Agregar Nuevo Auto">
                <form id="agregarAuto" action="index.php?accion=ingresarAuto" method="post">
                    <table>
                        <tr>
                            <td><label for="autPlaca">Placa</label></td>
                            <td><input type="text" name="autPlaca" id="autPlaca"></td>
                        </tr>
                        <tr>
                            <td><label for="autMarca">Marca</label></td>
                            <td><input type="text" name="autMarca" id="autMarca"></td>
                        </tr>
                        <tr>
                            <td><label for="autModelo">Modelo</label></td>
                            <td><input type="text" name="autModelo" id="autModelo"></td>
                        </tr>
                        <tr>
                            <td><label for="autColor">Color</label></td>
                            <td><input type="text" name="autColor" id="autColor"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="asignarEnviar" value="Enviar" id="asignarEnviar">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div id="auto"></div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
