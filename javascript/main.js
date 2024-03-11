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

// Form Contact

const $form = document.querySelector('#contact-form');
const $buttonMailTo = document.querySelector('#email-send');

$form.addEventListener('submit', handleSubmit);

function handleSubmit(event){
    event.preventDefault();
    const form = new FormData(this);
    console.log(form.get('email'));
    $buttonMailTo.setAttribute('href', `mailto:phase.studios@gmail.com?subject=Asunt: ${form.get('asunt')} Email: ${form.get('email')}&body=${form.get('message')}`);
    $buttonMailTo.click();
}