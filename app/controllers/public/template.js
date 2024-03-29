
const API_CONTACTO = '../../app/api/mail.php?action=';

document.addEventListener('DOMContentLoaded', function () {
    let current_url = document.location;
    /*     console.log(current_url);
     */
    var path = window.location.pathname;
    var page = path.split("/").pop();
/*     console.log(page);
 */    document.querySelectorAll(".nav-link").forEach(function (e) {
        if (e.href == current_url) {
            e.classList += " current";
        }
        if (page == "" || page == "index.php" || page == null) {
            document.getElementById('home').classList.add('current');
        }
        if (page == "servicios.php") {
            document.getElementById('services').classList.add('current');
        }
        if (page == "proyectos.php") {
            document.getElementById('project').classList.add('current');
        }
    });


    load();
    reCAPTCHA();
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        if (event.matches) {
            modoOscuro();

        }
    });

    window.matchMedia('(prefers-color-scheme: light)').addEventListener('change', event => {
        if (event.matches) {
            modoClaro();
        }

    });


});


function load() {



    let mode = localStorage.getItem("mode");
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches || mode == 'claro' || mode == '' || mode == null) {
        modoClaro();
    }


    else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches || mode == 'oscuro') {
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
    document.documentElement.style.setProperty('--colorTexto', "#000000");

    document.documentElement.style.setProperty('--color-spinner', '#FFFFFF');

    document.documentElement.style.setProperty('--bannerWs', 'linear-gradient(180deg, rgba(25, 27, 52, 1 ) 23%, rgba(255, 255, 255, 1) 23%)');
    document.getElementById('logoNav').src = "../../resources/img/logoOscuro.png";


    localStorage.setItem('mode', 'oscuro');
    document.documentElement.style.setProperty('--colorSlider', '#FFFFFF');
    var navbar = document.getElementById("navbar");
    navbar.style.setProperty("transition", ".6s");

    var footer = document.querySelector("footer");
    footer.style.setProperty("transition", ".6s");

    document.documentElement.style.setProperty('--colorBanner', '#FFFFFF');


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

    var path = window.location.pathname;
    var page = path.split("/").pop();
    /*     console.log(page);
     */
    if (page == "proyecto.php") {
        document.getElementById('proyectos').className = "d-none";
        document.getElementById('proyectos2').className = "row justify-content-center animate__animated animate__backInUp";
    }


    if (page == "" || page == "index.php" || page == null) {
        document.getElementById('imgwsacademy').src = "../../resources/img/wsacademyOscuro.png";
        document.getElementById('bannerMobile').src = "../../resources/img/wsacademyOscuro.png";

    }





}


function modoClaro() {

    document.documentElement.style.setProperty('--color-fondo', '#FFFFFF');
    document.documentElement.style.setProperty('--body-color', '#FFFFFF');
    document.documentElement.style.setProperty('--color-spinner', '#191B34');

    document.documentElement.style.setProperty('--colorTexto', "#FFFFFF");

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
    document.documentElement.style.setProperty('--colorBanner', '#191B34');


    document.documentElement.style.setProperty('--imgToggle', 'url("../../resources/img/menu.png")');
    document.documentElement.style.setProperty('--animation', '.6s');
    localStorage.setItem('estado', 'active');
    document.documentElement.style.setProperty('--dot-colors', "#C4C4C4");
    document.documentElement.style.setProperty('--opacity', ".5");

    var path = window.location.pathname;
    var page = path.split("/").pop();
    /*     console.log(page);
     */
    if (page == "proyecto.php") {

        document.getElementById('proyectos2').className = "d-none";
        document.getElementById('proyectos').className = "row justify-content-center animate__animated animate__backInUp";
    }

    if (page == "" || page == "index.php" || page == null) {
        document.getElementById('imgwsacademy').src = "../../resources/img/wsacademy.png";
        document.getElementById('bannerMobile').src = "../../resources/img/wsacademy.png";
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
    var load = document.getElementById('spinner');
    load.className = "spinner-border m-3 loadingForm";
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
                    var load = document.getElementById('spinner');
                    load.className = "d-none";
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


$(document).ready(function () {
    var rdoIndex = 0;
    var rollDemRadios = setInterval(function () {
        var rdoCount = $('input[name="slider"]').length;
        $('input[name="slider"]:eq(' + rdoIndex % rdoCount + ')').click();
        rdoIndex++;
    }, 20000);


});

$(document).ready(function () {


    $("#btnV1").click(function () {
        location.href = "servicios.php?data-tab=1";
    });

    $("#btnV2").click(function () {
        location.href = "servicios.php?data-tab=2";
    });

    $("#btnV3").click(function () {
        location.href = "servicios.php?data-tab=3";
    });

    $("#btnV4").click(function () {
        location.href = "servicios.php?data-tab=4";
    });



});




function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

    if (dots.style.display === "none") {
        dots.style.display = "inline-block";
        btnText.innerHTML = "Leer más";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Leer menos";
        moreText.style.display = "inline-block";
    }
}

