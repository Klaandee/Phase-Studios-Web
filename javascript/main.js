// Preload

window.onload = function (){
    $('#onload').fadeOut();
    $('body').removeClass('hidden');
}

// NavBar

const navbar = document.querySelector("#nav");
const abrir = document.querySelector("#open");
const cerrar = document.querySelector("#close");

abrir.addEventListener("click", () => {
    navbar.classList.add("visible");
});

cerrar.addEventListener("click", () => {
    navbar.classList.remove("visible");
});

window.addEventListener("scroll", function(){
    let header = document.querySelector('#navbar-header');
    header.classList.toggle("down",window.scrollY>0);
});

// Evitar Reenvio de Formulario