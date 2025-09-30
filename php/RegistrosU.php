<?php
include_once 'php/conexion.php';  // asegúrate de que la ruta sea correcta

$Usuario    = $_POST['Usuario'];
$Documento  = $_POST['Documento'];
$NDocumento = $_POST['Ndomumento'];
$Nombre     = $_POST['Nombre'];
$Apellido   = $_POST['Apellido'];
$Correo     = $_POST['Email'];
$Ciudad     = $_POST['Ciudad'];
$Contra     = password_hash($_POST['password'], PASSWORD_BCRYPT); // encriptado
$Telefono   = $_POST['Celular'];
$Direccion  = $_POST['Direccion'];

$insertar = "INSERT INTO CLIENTES 
(USUARIO, DOCUMENTO, NDOCUMENTO, NOMBRES, APELLIDOS, EMAIL, CIUDAD, PASSWORD, CELULAR, DIRECCION)
VALUES ('$Usuario','$Documento','$NDocumento','$Nombre','$Apellido','$Correo',
'$Ciudad','$Contra','$Telefono','$Direccion')";

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado) {
    echo "Error al registrar Usuario: " . mysqli_error($conexion);
} else {
    echo '<script>
        alert("Cliente Registrado correctamente");
        window.history.go(-1);
    </script>';
}

mysqli_close($conexion);
?>
