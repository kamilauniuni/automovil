<!DOCTYPE html>
<html>

<head>
    <title>Automóviles</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Automóviles</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">inicio</a> </li>
            <li><a href="index.php?accion=asignar">Asignar</a> </li>
            <li><a href="index.php?accion=consultar">Consultar Auto</a> </li>
            

        </ul>
        <div id="contenido">
            <?php $fila = $result->fetch_object(); ?>
            <h2>Información Carro</h2>
            <table>
                <tr>
                    <th colspan="2">Datos del carro</th>
                </tr>
                <tr>
                    <td>placa del carro </td>
                    <td><?php echo $fila->autPlaca; ?></td>
                </tr>
                <tr>
                    <td>marca</td>
                    <td><?php echo $fila->autMarca; ?></td>
                </tr>
                <tr>
                    <td>modelo</td>
                    <td><?php echo $fila->autModelo; ?></td>
                </tr>
                <tr>
                    <td>color</td>
                    <td><?php echo $fila->autColor; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>