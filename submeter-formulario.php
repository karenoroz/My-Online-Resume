<?php
        $nombre= $_POST['introducir_nombre'];
        $mail=$_POST['introducir_email'];
        $telefono=$_POST['introducir_telefono'];
        $mensaje=$_POST['introducir_mensaje'];
        $asunto = 'Enviado desde la Web';

        $header = 'From: ' . $mail . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";

        $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
        $mensaje .= "Su e-mail es: " . $mail . " \r\n";
        $mensaje .= "Telefono de contacto: " . $telefono . " \r\n";
        $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
        $mensaje .= "Enviado el " . date('d/m/Y', time());

        $para = 'karoz_11@hotmail.com';

        mail($para, $asunto, utf8_decode($mensaje), $header);

        header("Location:index.html");
?>
