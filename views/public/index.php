<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Inicio');
?>


<?php

webSite::carousel();

?>

<?php

webSite::projectSlider();

?>

<br>


<?php

webSite::serviceSlider();

?>

<br>
<br>
<br>

<?php

webSite::infiniteSlider();

?>



<?php

webSite::teamSlider();


?>

<div class="container">

<div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-xl-12 col-sm-12 col text-end">

    <a href="nosotros.php" class="teamLink" >Ver Team 〉</a>

    </div>
</div>
</div>





<br>
<br>
<br>

<?php

webSite::wsacademyBanner();


webSite::wsacademyMobile();

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