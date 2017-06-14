<?php
$para=$_POST['para'];  
$título=$_POST['titulo'];  
$mensaje=$_POST['mensaje'];  


header("Location: index.php?page=home");

// Enviarlo
//mail($para, $título, $mensaje,null);

?>