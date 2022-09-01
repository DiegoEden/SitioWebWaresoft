<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
$proyecto = $_GET['project'];


webSite::header($proyecto);
?>


<br>
<br>
<br>
<br>
<br>

<?php

webSite::projectTemplate();

?>

<br>
<br>
<br>
<br>

<?php

webSite::formTemplate();

?>





<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('proyectos.js');
?>