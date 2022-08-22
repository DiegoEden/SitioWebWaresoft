

document.addEventListener('DOMContentLoaded', function () {
    let current_url = document.location;

    document.querySelectorAll(".nav-link").forEach(function (e) {
        if (e.href == current_url) {
            e.classList += " current";
        }
        if (current_url == 'http://localhost/sitioWebWaresoft/views/public/' ||current_url == 'http://localhost/sitioWebWaresoft/views/public/#') {
            document.getElementById('home').classList.add('current');
        }
    });


    load();


});


function load() {


    let mode = localStorage.getItem("mode");
    if (mode == '' || mode == null) {
        modoClaro();
    }
    if (mode == 'claro') {

        modoClaro();

    } else if (mode == 'oscuro') {
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

    document.documentElement.style.setProperty('--imgToggle', 'url("../../resources/img/menu.png")');
    document.documentElement.style.setProperty('--animation', '.6s');
    localStorage.setItem('estado', 'active');



}


$(document).ready(function() {
    $('#myCarousel').carousel({
        interval: 4000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function() {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function(e) {
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