
const API_CONTACTO = '../../app/api/mail.php?action=';

document.addEventListener('DOMContentLoaded', function () {
    let current_url = document.location;
    /*     console.log(current_url);
     */
    document.querySelectorAll(".nav-link").forEach(function (e) {
        if (e.href == current_url) {
            e.classList += " current";
        }
        if (current_url == 'http://localhost/sitioWebWaresoft/views/public/' || current_url == 'http://localhost/sitioWebWaresoft/views/public/#' || current_url == 'http://localhost/sitioWebWaresoft/views/public/index.php#') {
            document.getElementById('home').classList.add('current');
        }
    });


    load();
    reCAPTCHA();


});


function load() {



    var hour = (new Date).getHours();
    let mode = localStorage.getItem("mode");
    if (mode == '' || mode == null) {
        modoClaro();
    }
    if (mode == 'claro' || hour == 6) {

        modoClaro();

    } else if (mode == 'oscuro' || hour == 18) {
        modoOscuro();
    }

    let estado = localStorage.getItem('estado');
    if (estado == 'active' || estado == null) {
        document.documentElement.style.setProperty('--animation', 'none');

    }

}



function modoOscuro() {

    document.documentElement.style.setProperty('--body-color', '#191B34');
    document.documentElement.style.setProperty('--color-fondo', '#191B34');
    document.documentElement.style.setProperty('--colorLetra', "#FFFFFF");
    document.documentElement.style.setProperty('--bannerWs', 'linear-gradient(180deg, rgba(255,255,255,1) 23%, rgba(67,67,67,1) 23%)');
    document.getElementById('logoNav').src = "../../resources/img/logoOscuro.png";
    localStorage.setItem('mode', 'oscuro');
    document.documentElement.style.setProperty('--colorSlider', '#FFFFFF');
    var navbar = document.getElementById("navbar");
    navbar.style.setProperty("transition", ".6s");

    var footer = document.querySelector("footer");
    footer.style.setProperty("transition", ".6s");

    document.getElementById("oscuro").style.setProperty("display", "none");
    document.getElementById("claro").style.setProperty("display", "block");
    document.getElementById("claro").style.setProperty("transition", ".6s");
    document.getElementById("oscuro").style.setProperty("transition", ".6s");
    document.documentElement.style.setProperty('--imgToggle', 'url("../../resources/img/menuOscuro.png")');
    document.documentElement.style.setProperty('--animation', '.6s');
    localStorage.setItem('estado', 'active');
    document.documentElement.style.setProperty('--dot-colors', "#FFFFFF");
    document.documentElement.style.setProperty('--opacity', "initial");
    document.documentElement.style.setProperty('--colorPrev', "#787878");
    document.documentElement.style.setProperty('--colorNext', "#787878");
    document.documentElement.style.setProperty('--colorOn', "#E0E0E0");
    let current_url = document.location;

    if (current_url == "http://localhost/sitioWebWaresoft/views/public/experiencia.php") {
        document.getElementById('proyectos').className = "d-none";
        document.getElementById('proyectos2').className = "row justify-content-center animate__animated animate__backInUp";
    }







}


function modoClaro() {

    document.documentElement.style.setProperty('--color-fondo', '#FFFFFF');
    document.documentElement.style.setProperty('--body-color', '#FFFFFF');
    document.documentElement.style.setProperty('--colorLetra', "#000000");
    document.documentElement.style.setProperty('--bannerWs', 'linear-gradient(180deg, rgba(255, 255, 255, 1) 23%, rgba(25, 27, 52, 1) 23%)');
    document.getElementById('logoNav').src = "../../resources/img/logoClaro.png";
    localStorage.setItem('mode', 'claro');
    document.documentElement.style.setProperty('--colorSlider', '#F2F2F2');
    document.getElementById("claro").style.setProperty("display", "none");
    document.getElementById("oscuro").style.setProperty("display", "block");
    document.getElementById("claro").style.setProperty("transition", ".6s");
    document.getElementById("oscuro").style.setProperty("transition", ".6s");
    document.documentElement.style.setProperty('--colorPrev', "#E0E0E0");
    document.documentElement.style.setProperty('--colorNext', "#E0E0E0");
    document.documentElement.style.setProperty('--colorOn', "#787878");


    document.documentElement.style.setProperty('--imgToggle', 'url("../../resources/img/menu.png")');
    document.documentElement.style.setProperty('--animation', '.6s');
    localStorage.setItem('estado', 'active');
    document.documentElement.style.setProperty('--dot-colors', "#C4C4C4");
    document.documentElement.style.setProperty('--opacity', ".5");

    let current_url = document.location;

    if (current_url == "http://localhost/sitioWebWaresoft/views/public/experiencia.php") {

        document.getElementById('proyectos2').className = "d-none";
        document.getElementById('proyectos').className = "row justify-content-center animate__animated animate__backInUp";
    }









}


$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 4000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function () {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function (e) {
        if (!clickEvent) {
            var count = $('.nav').children().length - 1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('bs-slide-to'));
            if (count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });
});


function showVideo1() {

    document.getElementById('video1').className = "img-fluid";
    document.getElementById('video2').className = "d-none";
    document.getElementById('video3').className = "d-none";
    document.getElementById('video4').className = "d-none";
    document.getElementById('btnV2').classList.remove("activeServicios");
    document.getElementById('btnV3').classList.remove("activeServicios");
    document.getElementById('btnV4').classList.remove("activeServicios");
    document.getElementById('btnV1').classList.add("activeServicios");

}

function showVideo2() {

    document.getElementById('video2').className = "img-fluid";
    document.getElementById('video1').className = "d-none";
    document.getElementById('video3').className = "d-none";
    document.getElementById('video4').className = "d-none";
    document.getElementById('btnV1').classList.remove("activeServicios");
    document.getElementById('btnV3').classList.remove("activeServicios");
    document.getElementById('btnV4').classList.remove("activeServicios");
    document.getElementById('btnV2').classList.add("activeServicios");


}

function showVideo3() {

    document.getElementById('video3').className = "img-fluid";
    document.getElementById('video1').className = "d-none";
    document.getElementById('video2').className = "d-none";
    document.getElementById('video4').className = "d-none";
    document.getElementById('btnV2').classList.remove("activeServicios");
    document.getElementById('btnV1').classList.remove("activeServicios");
    document.getElementById('btnV4').classList.remove("activeServicios");
    document.getElementById('btnV3').classList.add("activeServicios");


}

function showVideo4() {

    document.getElementById('video4').className = "img-fluid";
    document.getElementById('video1').className = "d-none";
    document.getElementById('video3').className = "d-none";
    document.getElementById('video2').className = "d-none";
    document.getElementById('btnV2').classList.remove("activeServicios");
    document.getElementById('btnV3').classList.remove("activeServicios");
    document.getElementById('btnV1').classList.remove("activeServicios");
    document.getElementById('btnV4').classList.add("activeServicios");


}



function clear() {

    document.getElementById('nombre').value = "";
    document.getElementById('comentarios').value = "";
    document.getElementById('email').value = "";
    document.getElementById('mensaje').value = "";

}


document.getElementById('save-form').addEventListener('submit', function (event) {
    //Se evita que se recargue la pagina
    const boton = document.getElementById('enviar');
    boton.disabled = true;
    event.preventDefault();
    fetch(API_CONTACTO + 'sendMail', {
        method: 'post',
        body: new FormData(document.getElementById('save-form'))
    }).then(function (request) {
        // Se verifica si la petición es correcta, de lo contrario se muestra un mensaje indicando el problema.
        if (request.ok) {
            request.json().then(function (response) {
                // Se comprueba si la respuesta es satisfactoria, de lo contrario se muestra un mensaje con la excepción.
                if (response.status) {
                    sweetAlert(1, response.message, null);
                    const boton = document.getElementById('enviar');
                    boton.disabled = false;
                    clear();
                } else {
                    // Se verifica si el token falló (ya sea por tiempo o por uso).
                    if (response.recaptcha) {
                        sweetAlert(2, response.exception, 'index.php');
                    } else {
                        sweetAlert(2, response.exception, 'index.php');
                        // Se genera un nuevo token.
                        reCAPTCHA();
                    }
                }
            });
        } else {
            console.log(request.status + ' ' + request.statusText);
        }
    }).catch(function (error) {
        console.log(error);
    });
});


function reCAPTCHA() {
    // Método para generar el token del reCAPTCHA.
    grecaptcha.ready(function () {

        // Se obtiene un token para la página web mediante la llave pública.
        grecaptcha.execute('6Lf0cuAhAAAAAJIimQGNnPTNO5ww7TS9kkkQnvwm', { action: 'submit' }).then(function (token) {
            // Se asigna el valor del token al campo oculto del formulario
            document.getElementById('g-recaptcha-response').value = token;
        });
    });
}