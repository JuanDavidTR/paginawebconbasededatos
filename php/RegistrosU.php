<?php


include_once '/php/conexion.php';

$Usuario = $_REQUEST['Usuario'];
$Documento = $_REQUEST['Documento'];
$NDocumento = $_REQUEST['Ndomumento'];
$Nombre = $_REQUEST['Nombre'];
$Apellido = $_REQUEST['Apellido'];
$Correo = $_REQUEST['Email'];
$Ciudad = $_REQUEST['Ciudad'];
$Contra = $_REQUEST['password'];
$Telefono = $_REQUEST['Celular'];
$Direccion = $_REQUEST['Direccion'];


$insertar = "INSERT INTO `CLIENTES` (`USUARIO`, `DOCUMENTO`, `NDOCUMENTO`,
`NOMBRES`, `APELLIDOS`, `EMAIL`, `CIUDAD`, `PASSWORD`, `CELULAR`,
`DIRECCION`)
VALUES ('$Usuario','$Documento','$NDocumento','$Nombre','$Apellido', '$Correo',
'$Ciudad','$Contra','$Telefono', '$Direccion')";


$resultado = mysqli_query($conexion, $insertar);
s
if (!$resultado) {

    eho "Error al registrar Usuario";
}

else {

  echo '<script>
    alert ("Cliente Registrado correctamente");
    window.history.go(-1);</script>';

}

?>