<?php

$conexion = new mysqli("localhost", "id18340797_julio", "Bx2Q|R+#0vAah^8_", "id18340797_practicas");
if($conexion){
    echo "la gestion fue exitosa";
    /*header("Location: index.php");*/
}else{
    echo "Fallo la gestion";
}
?> 