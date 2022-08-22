<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Inicio');
?>


<?php

webSite::carousel();

?>

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