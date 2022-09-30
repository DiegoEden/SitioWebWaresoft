

$(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        responsive: {
            0: { items: 1 },
            480: { items: 2 },
            575: { items: 2 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 3 }
        }
    });
});



$(document).ready(function () {
    $('#carouselEquipo').carousel({
        interval: 3000,
        cycle: true
    });


});


 function clicked() {
    document.getElementById('wrapper').scrollBy(1500, 0);
}


function clicked2() {
    document.getElementById('wrapper').scrollBy(-1500, 0);
}

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