<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];
    
    $destinatario = "aixagiovannafernandez@gmail.com";
    $asunto = "Consulta de $nombre";
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Correo Electrónico: $correo\n\n";
    $mensaje .= "Consulta:\n$comentario";
    
    // Envía el correo
    mail($destinatario, $asunto, $mensaje);
    
    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
}
?>
