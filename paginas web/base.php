<?php
include 'prueba_bd.php';
//Recibir los datos y almacenarlos en variables
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$Email = $_POST["email"];
$Telefono = $_POST["telefono"];
$Celular = $_POST["celular"];
// Consulta para insertar
$insertar = "INSERT INTO filas(nombre,apellido,email,telefono,celular) VALUES ('$nombre','$apellido','$email','$telefono','$celular')";
//Ejecutar consulta
$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo 'Error al enviar el mensaje';
}   else {
    echo '<script>
        alert("Mensaje enviado correctamente");
        window.history.go(-1);
        </script>';
}
//Cerrar conexion
mysqli_close($conexion);