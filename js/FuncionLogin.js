function abrirLogin(){
    document.querySelector(".contenedor-login").style.transition = "transform 4s";
    document.querySelector(".contenedor-login").style.opacity = "1";
    document.querySelector(".contenedor-login").style.visibility = "visible";
    document.querySelector(".contenedor-login form").style.transform= "translateX(100%)";
}
function cerrarLogin() {

    document.querySelector(".contenedor-login form").style.transform= "translateX(-350%)";
}