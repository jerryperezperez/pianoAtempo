function actualizarHora() {
    fecha = new Date();
    var minuto = fecha.getMinutes();
    var hora = fecha.getHours();

    var dia = fecha.getDate();
    var mes = fecha.getMonth() + 1;
    var anio = fecha.getFullYear();

    if (minuto < 10) {
        minuto = '0' + minuto;
    }

    if (hora < 10) {
        hora = '0' + hora;
    }

    var fecha = dia + " de " + mes + " del " + anio;
    var horario = hora + ":" + minuto;
    document.getElementById("fecha").innerHTML = horario + " | " + fecha;

}

window.onload = setInterval(actualizarHora, 1000);