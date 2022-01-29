// var modal = document.querySelector(".ventana");
// var trigger = document.querySelector(".trigger");
// var closeButton = document.querySelector(".boton-cerrar");

// function toggleModal() {
//     modal.classList.toggle("mostrar-ventana");
// }

// function windowOnClick(event) {
//     if (event.target === modal) {
//         toggleModal();
//     }
// }
// trigger.addEventListener("click", toggleModal);
// closeButton.addEventListener("click", toggleModal);
// window.addEventListener("click", windowOnClick);

var botonAbrir = document.getElementById("botonSuscripcion");
var botonCerrar = document.getElementById("botonCerrar");
botonAbrir.addEventListener("click", function() {
    mostrarPopPup();
});

botonCerrar.addEventListener("click", function() {
    cerrarPopPup();
});

function cerrarPopPup() {
    document.getElementById('ventanaEmergente').style.display = "none";
}

function mostrarPopPup() {
    document.getElementById('ventanaEmergente').style.display = "block";
}