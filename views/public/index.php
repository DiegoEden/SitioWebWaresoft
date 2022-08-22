<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Inicio');
?>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <video class="" autoplay loop muted src="../../resources/video/Tropical.mp4"></video>
            <div class="carousel-caption">
                <h3>
                    Headline</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            </div>
        </div>
        <!-- End Item -->
        <div class="carousel-item">
            <video class="" autoplay loop muted src="../../resources/video/Tropical.mp4"></video>
            <div class="carousel-caption">
                <h3>
                    Headline</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            </div>
        </div>
        <!-- End Item -->
        <div class="carousel-item">
            <video class="" autoplay loop muted src="../../resources/video/Tropical.mp4"></video>
            <div class="carousel-caption">
                <h3>
                    Headline</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            </div>
        </div>
        <!-- End Item -->
        <div class="carousel-item">
            <video class="" autoplay loop muted src="../../resources/video/Tropical.mp4"></video>
            <div class="carousel-caption">
                <h3>
                    Headline</h3>
                <p>
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                    tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                    ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            </div>
        </div>
        <!-- End Item -->
    </div>
    <!-- End Carousel Inner -->
    <ul class="nav nav-pills nav-justified justify-content-end">
        <li data-bs-target="#myCarousel" class="active" data-bs-slide-to="0"><a href="#">01 <span>Servicio <br>Tecnología</span> </a></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="1"><a href="#">02 <span>Servicio <br>Software</span></a></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="2"><a href="#">03 <span>Servicio <br>Cloud</span></a></li>
        <li data-bs-target="#myCarousel" data-bs-slide-to="3"><a href="#">04 <span>Servicio <br>Digital</span></a></li>



    </ul>
</div>



<br>
<br>
<br>


<?php

webSite::infiniteSlider();

?>

<br>
<br>
<br>

<?php

webSite::wsacademyBanner();

?>

<br>
<br>
<br>


<?php

webSite::formTemplate();

?>

<br>
<br>
<br>


<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('index.js');
?>