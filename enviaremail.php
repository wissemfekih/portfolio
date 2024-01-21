<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['name']; //ASEGÚRATE QUE 'name' COINCIDE CON EL VALOR "name" DEL CAMPO NOMBRE EN TU FORMULARIO
    $correo = $_POST['email']; //ASEGÚRATE QUE 'email' COINCIDE CON EL VALOR "name" DEL CAMPO EMAIL EN TU FORMULARIO
    $mensaje = $_POST['message']; //ASEGÚRATE QUE 'message' COINCIDE CON EL VALOR "name" DEL CAMPO MENSAJE EN TU FORMULARIO. 

    $micorreo = "tucorreo@gmail.es"; // AQUÍ DEBES ESCRIBIR EL CORREO AL QUE QUIERES QUE LLEGUEN LOS MENSAJES
    $asunto = "Mensaje desde el formulario WEB";

    $contenido = "Nombre: " . $nombre . "\n";
    $contenido .= "Correo electrónico: " . $correo . "\n";
    $contenido .= "Mensaje: " . $mensaje . "\n";

    $headers = 'From: ' . $correo . "\r\n" .
        'Reply-To: ' . $correo . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($micorreo, $asunto, $contenido, $headers)) {
        header('Location: index.html');
        exit;
    } else {
        echo "Ha ocurrido un error al enviar el mensaje. Por favor, inténtalo nuevamente.";
    }
}

?>