



$(document).ready(function () {
    $('#carouselEquipo').carousel({
        interval: 3000,
        cycle: true
    });


});


/*FUNCIONES COMENTARIADAS PARA UN USO POSIBLE EN EL FUTURO

/*  function clicked() {
    document.getElementById('wrapper').scrollBy(1500, 0);
}


function clicked2() {
    document.getElementById('wrapper').scrollBy(-1500, 0);
}
 */
/*var a = 0;

function clicked3() {
    a += 1;
    document.getElementById('wrapper').scrollBy(430, 0);
    if (a == 3) {
        document.getElementById('btnScrollMobile1').style.setProperty("display", "none");
        document.getElementById('btnScrollMobile2').style.setProperty ( "display","inline-block");

        a = 0;
    }
}


function clicked4() {
    a += 1;
    document.getElementById('wrapper').scrollBy(-430, 0);

    if (a == 3) {
        document.getElementById('btnScrollMobile2').style.setProperty("display", "none");
        document.getElementById('btnScrollMobile1').style.setProperty ( "display","inline-block")

        a = 0;

    }

} */

$(document).ready(function() {
    var rdoIndex = 0;    
    var rollDemRadios = setInterval(function() {
        var rdoCount = $('input[name="slider2"]').length;
        $('input[name="slider2"]:eq(' + rdoIndex%rdoCount + ')').click();
        rdoIndex++;        
    }, 5000);
    
   
});