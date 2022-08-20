

document.addEventListener('DOMContentLoaded', function () {
    let current_url = document.location;
    console.log(current_url);

    document.querySelectorAll(".nav-link").forEach(function (e) {
        if (e.href == current_url) {
            e.classList += " current";
        }
        if (current_url == 'http://localhost/sitioWebWaresoft/views/public/') {
            document.getElementById('home').classList.add('current');
        }
    });


    load();

    console.log(localStorage.getItem('mode'));

});


function load() {


    let mode = localStorage.getItem("mode");
    if (mode == ''|| mode==null) {
        modoClaro();
    }
    if (mode == 'claro') {

        modoClaro();

    } else if (mode == 'oscuro') {
        modoOscuro();
    }

}



function modoOscuro() {

    document.documentElement.style.setProperty('--body-color', '#191B34');
    document.documentElement.style.setProperty('--color-fondo', '#191B34');
    document.documentElement.style.setProperty('--body-color', '#191B34');
    document.documentElement.style.setProperty('--colorLetra', "#FFFFFF");
    document.documentElement.style.setProperty('--bannerWs', 'linear-gradient(180deg, rgba(255,255,255,1) 23%, rgba(67,67,67,1) 23%)');
    document.getElementById('logoNav').src = "../../resources/img/logoOscuro.png";
    localStorage.setItem('mode', 'oscuro');
    document.documentElement.style.setProperty('--colorSlider','#FFFFFF');
    var navbar = document.getElementById("navbar");
    navbar.style.setProperty("transition", ".6s");

    var footer = document.querySelector("footer");
    footer.style.setProperty("transition", ".6s");

}


function modoClaro() {

    document.documentElement.style.setProperty('--body-color', '#FFFFFF');
    document.documentElement.style.setProperty('--color-fondo', '#FFFFFF');
    document.documentElement.style.setProperty('--body-color', '#FFFFFF');
    document.documentElement.style.setProperty('--colorLetra', "#000000");
    document.documentElement.style.setProperty('--bannerWs', 'linear-gradient(180deg, rgba(255, 255, 255, 1) 23%, rgba(25, 27, 52, 1) 23%)');
    document.getElementById('logoNav').src = "../../resources/img/logoClaro.png";
    localStorage.setItem('mode', 'claro');
    document.documentElement.style.setProperty('--colorSlider','#F2F2F2');


}

