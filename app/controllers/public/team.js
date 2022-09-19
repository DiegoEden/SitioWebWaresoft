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