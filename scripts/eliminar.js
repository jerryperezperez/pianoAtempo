function eliminarDocumento(id, ruta) {
    var opcion = confirm('¿Seguro que quieres eliminar este documento?');
    if (opcion) {
        location.href = "../conexion/eliminarDocumento.php?id=" + id + "&ruta=" + ruta;
    }

};

function eliminarAdministrador(id) {
    var opcion = confirm('¿Seguro que quieres eliminar a este administrador?');
    if (opcion) {
        location.href = "../conexion/eliminarAdministrador.php?id=" + id;
    }
};


function eliminarSuscriptor(id) {
    var opcion = confirm('¿Seguro que quieres eliminar a este suscriptor?');
    if (opcion) {
        location.href = "../conexion/eliminarSuscriptor.php?id=" + id;
    }
};