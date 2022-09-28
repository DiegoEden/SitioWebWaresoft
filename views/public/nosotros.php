<?php
//Se imprime la plantilla del encabezado y se envía el titulo para la página web

include('../../app/helpers/template.php');
webSite::header('Nosotros');
?>


<?php

webSite::getTeamInfo();

?>




<?php

webSite::formTemplate();

?>




<?php
//Se imprime la plantilla del footer y se envía el controlador a usar

webSite::footer('team.js');
?>