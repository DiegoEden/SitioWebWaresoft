
var btnContainer = document.getElementById("listaServicios");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("buttonServicios2");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("activeServicios2");
        current[0].className = current[0].className.replace(" activeServicios2", "");
        this.className += " activeServicios2";
    });
}


$(document).ready(function () {

    setTimeout(function () {
        $('#containerServicios').show()
    }, 1000);


});


var btnContainer2 = document.getElementById("indicadores");

// Get all buttons with class="btn" inside the container
var btns2 = btnContainer2.getElementsByClassName("botonesindicador");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns2.length; i++) {
    btns2[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("activeIndicador");
        current[0].className = current[0].className.replace(" activeIndicador", "");
        this.className += " activeIndicador";
    });
}

document.addEventListener('DOMContentLoaded', function () {

    services();
    const serViceId = new URLSearchParams(window.location.search).get('data-tab');
    console.log(serViceId);

    if (serViceId == '1' || serViceId == '2' || serViceId == '3' || serViceId == '4') {

        if (serViceId == '1') {

            document.getElementById('btn1').click();
        }
        else if (serViceId == '2') {

            document.getElementById('btn2').click();


        } else if (serViceId == '3') {
            document.getElementById('btn3').click();

        }
        else if (serViceId == '4') {
            document.getElementById('btn4').click();
        }
    } else {

        console.log('No ha seleccionado');
    }
});






function services() {

    btnTec = document.getElementById("btn1");
    btnSoft = document.getElementById("btn2");
    btnCloud = document.getElementById("btn3");
    btnUx = document.getElementById("btn4");


    btnSoft.addEventListener('click', function () {
        if (btnSoft.classList.contains("activeServicios2")) {

            document.getElementById('software').className = 'animate__animated animate__fadeIn servicios';
            document.getElementById('tecnologia').className = 'd-none';
            document.getElementById('cloud').className = 'd-none';
            document.getElementById('digital').className = 'd-none';


        }

        document.getElementById('btnNext2').click();

    });


    btnTec.addEventListener('click', function () {
        if (btnTec.classList.contains("activeServicios2")) {

            document.getElementById('tecnologia').className = ' animate__animated animate__fadeIn servicios';
            document.getElementById('software').className = 'd-none';
            document.getElementById('cloud').className = 'd-none';
            document.getElementById('digital').className = 'd-none';

        }

        document.getElementById('btnPrev').click();

    });



    btnCloud.addEventListener('click', function () {
        if (btnCloud.classList.contains("activeServicios2")) {

            document.getElementById('tecnologia').className = 'd-none ';
            document.getElementById('software').className = 'd-none';
            document.getElementById('cloud').className = 'animate__animated animate__fadeIn servicios';
            document.getElementById('digital').className = 'd-none';

        }

        document.getElementById('btnNext').click();

    });


    btnUx.addEventListener('click', function () {
        if (btnUx.classList.contains("activeServicios2")) {

            document.getElementById('tecnologia').className = 'd-none';
            document.getElementById('software').className = 'd-none';
            document.getElementById('cloud').className = 'd-none';
            document.getElementById('digital').className = 'animate__animated animate__fadeIn servicios';

        }

        document.getElementById('btnOn').click();

    });


}



