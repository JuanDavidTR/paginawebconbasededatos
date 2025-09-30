<?php

/*Variable $*/

$HOSTNAME = "sql100.infinityfree.com";
$USERNAME = "if0_39971319";
$PASSWORD = "XG6ZRysdnZ3Gi4J";
$DBNAME = "if0_39971319_basedatospagina";

$conexion = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DBNAME);

if (!$conexion) {

    echo "ERROR, NO HUBO CONEXION";
}

else {

    echo  "hubo conexicon entre tu y yo";

}




?>