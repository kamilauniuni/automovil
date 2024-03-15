function consultarAutomovil() {
    // alert("hola")
    var url = "index.php?accion=consultarAutomovil&dplaca=" + $("#asignarPlaca").val();
    $("#placa").load(url, function () {

    });
}


function consultarAuto() {

    var url = "index.php?accion=consultarAuto&consultarPlaca=" + $("#placa").val(); 
    $("#carros2").load(url);
}

function  ingresarAuto() {
    queryString = $("#agregarAuto").serialize();
    url = "index.php?accion=ingresarAuto" + queryString;
    $("#auto").load(url);
    $("#frmAuto").dialog('close');
}

function manejarSolicitudEdicionAuto(){
    queryString = $("#editarAuto").serialize();
    url = "index.php?accion=manejarSolicitudEdicionAuto" + queryString;
    $("#auto").load(url);
    $("#contenido").dialog('close');
}


function mostrarFormulario() {
    placa = "" + $("#agregarAuto").val();
    $("#auto").attr("value", placa);
    $("#frmAuto").dialog('open');
}

function consultarPlacaPorId() {
    var url = "index.php?accion=consultarAutomovil&consultarPlaca=" +
        $("#consultarPlaca").val();
    $("#resultadoConsulta").load(url);
}



function consultarAutomovil() {
    var url = "index.php?accion=consultarAutomovil&cancelarPlaca=" +
        $("#consultarPlaca").val();
    $("#resultadoConsulta").load(url);
}




function cancelarAuto(placa) {
    if (confirm("¿Estás seguro de que deseas cancelar este automóvil?")) {
        window.location.href = "index.php?accion=cancelarAutomovil&placa=" + placa;
    }
}


function cancelarAuto(placa) {
    if (confirm("¿Estás seguro de que deseas cancelar este automóvil?")) {
        window.location.href = "index.php?accion=cancelarAutomovil&placa=" + placa;
    }
}


function confirmarEliminar(placa) {
    if (confirm("¿Estás seguro de que deseas eliminar este automóvil?")) {
        window.location.href = "index.php?accion=cancelarAutomovil&placa=" + placa;
    }
}



