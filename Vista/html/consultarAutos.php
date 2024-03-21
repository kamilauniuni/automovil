<?php
if ($result->num_rows > 0) {
?>
<table>
    <tr>
        <th>placa</th>
        <th>marca</th>
        <th>modelo</th>
        <th>color</th>
    </tr>
    <?php
    while ($fila = $result->fetch_object()) {
    ?>
    <tr>
        <td><?php echo $fila->autPlaca; ?></td>
        <td><?php echo $fila->autMarca; ?></td>
        <td><?php echo $fila->autModelo; ?></td>
        <td><?php echo $fila->autColor; ?></td>
        <td><a href="index.php?accion=verAuto&placa=<?php echo $fila->autPlaca; ?>">Ver</a></td>
        <td><a href="index.php?accion=manejarSolicitudEdicionAuto&placa=<?php echo $fila->autPlaca ?>">Editar</a></td>

        <td><a href="#" onclick="cancelarAuto(<?php echo $fila->autPlaca;?>)">Eliminar</a></td>
    </tr>
    <?php
    } 
    ?>
</table>
<?php
} else {
?>
<p>El carro no se encuentra</p>
<?php
}
?>

</body>

</html>
