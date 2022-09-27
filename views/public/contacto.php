<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Contacto');
?>

<br>
<br>
<br>
<br>
<br>
<br>




<?php

webSite::formTemplate();

?>


<div class="owl-carousel owl-theme mt-5">
        
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1036622/pexels-photo-1036622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1212984/pexels-photo-1212984.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1832959/pexels-photo-1832959.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita dicta doloremque odit
                    saepe quo natus aut accusantium alias blanditiis.
                </div>
                
            </div>
        </div>
       
    </div>



<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('contact.js');
?>