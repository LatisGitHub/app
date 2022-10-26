<?php include('crearCookie.php')
?>
<?php
 //echo "Te gusta:". desencriptar($_COOKIE['servidor'],$method, $clave, $iv);
 echo "Te gusta:". desencriptar($_COOKIE['servidor'],3);

?> 