var button1 = document.getElementById('tarjeta1');
button1.addEventListener('click', function () {

    document.getElementById('tarjeta2').className = ' tarjeta content nextCard';
    document.getElementById('tarjeta3').className = 'tarjeta content prevCard';
    document.getElementById('tarjeta1').className = ' tarjeta content selectedCard';


});

var button2 = document.getElementById('tarjeta2');
button2.addEventListener('click', function () {

    document.getElementById('tarjeta1').className = ' tarjeta content nextCard';

    document.getElementById('tarjeta2').className = ' tarjeta content selectedCard';
    document.getElementById('tarjeta3').className = 'tarjeta content prevCard';
});


var button3 = document.getElementById('tarjeta3');
button3.addEventListener('click', function () {
    document.getElementById('tarjeta3').className = 'tarjeta content selectedCard';
    document.getElementById('tarjeta2').className = 'tarjeta content nextCard';
    document.getElementById('tarjeta1').className = ' tarjeta content  prevCard';



});

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