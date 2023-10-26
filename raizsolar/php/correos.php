<?php 


$destinatario = 'edwardq8722@gmail.com';
//esto es al correo al que se enviara 

$nombre = $_POST ['Nombre'];
$apellido = $_POST['Apellido'];
$correo = $_POST['Correo'];
$telefono= $_POST['Telefono'];
$mensaje=$_POST['Comentarios'];

$header = "Enviado desde la pagina Raizsolar";
$mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre . " " . $apellido . "\n Correo electronico: " . $correo . "\n Telefono: " . $telefono;
mail($destinatario, $header, $mensajeCompleto);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='../html/index.html'\"), 1000</script>";
