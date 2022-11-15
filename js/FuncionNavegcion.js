function abrirNavegador() {
    document.querySelector(".contenedor-modal").style.visibility = "visible";
    document.querySelector(".contenedor-modal").style.opacity = "1";
    document.querySelector(".modal-navegacontenedor").style.transform="translateX(200%)";

}

function cerrarVentana() {
    document.querySelector(".modal-navegacontenedor").style.transform="translateX(-150%)";
    document.querySelector(".contenedor-modal").style.opacity = "hidden";
    document.querySelector(".contenedor-modal").style.transition = "15s";
}
function producto(){
    window.location.href="../es.kokovet.vista/Productos.php";
}
function inicio(){
    window.location.href="../index.php";
}

