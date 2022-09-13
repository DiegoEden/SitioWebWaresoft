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