<!DOCTYPE html>
<html>

<head>
    <title>Editar Auto</title>
    <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
</head>

<body>
    <div id="contenedor">
        <div id="encabezado">
            <h1>Editar Auto</h1>
        </div>
        <ul id="menu">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?accion=asignar">Asignar</a></li>
            <li><a href="index.php?accion=consultar">Consultar Auto</a></li>
        </ul>
        <div id="contenido">
        <form id="editarAuto" action="index.php?accion=manejarSolicitudEdicionAuto&placa=<?php echo $_GET['placa']; ?>" method="post">



            <label for="placa">Placa:</label>
           <input type="text" id="placa" name="placa" value="<?php echo isset($placa) ? $placa : ''; ?>" readonly><br><br>

           <label for="marca">Marca:</label>
           <input type="text" id="marca" name="marca" value="<?php echo isset($marca) ? $marca : ''; ?>"><br><br>

           <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?php echo isset($modelo) ? $modelo : ''; ?>"><br><br>

         <label for="color">Color:</label>
         <input type="text" id="color" name="color" value="<?php echo isset($color) ? $color : ''; ?>"><br><br>

         

    <input type="submit" value="Guardar">
        </form>

        </div>
    </div>
    <script src="scripts.js"></script>
</body>

</html>
