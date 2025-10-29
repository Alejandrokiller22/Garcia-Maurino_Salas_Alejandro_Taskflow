<?php
$nombre = isset($_POST['nombre_contacto']) ? htmlspecialchars($_POST['nombre_contacto']) : "Desconocido";
$email = isset($_POST['email_contacto']) ? htmlspecialchars($_POST['email_contacto']) : "Sin email";
$mensaje = isset($_POST['mensaje_contacto']) ? htmlspecialchars($_POST['mensaje_contacto']) : "";

echo "<h2>Contacto recibido</h2>";
echo "Gracias por tu mensaje, <strong>" . $nombre . "</strong> (" . $email . "). Lo procesaremos pronto.";
?>
