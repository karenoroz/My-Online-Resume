<?php

if(isset($_POST['send'])){
    if(!empty($_POST['nombre']) && !empty($_POST['email'])&& !empty($_POST['telefono'])&& !empty($_POST['mensaje'])){
        $nombre= $_POST['nombre'];
        $mail=$_POST['email'];
        $telefono=$_POST['telefono'];
        $mensaje=$_POST['mensaje'];
        $asunto = 'Enviado desde la Web';
        $header = 'From: ' . $mail .;
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        $mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
        $mensaje .= "Su e-mail es: " . $mail . " \r\n";
        $mensaje .= "Enviado el " . date('d/m/Y', time());
        $para = karoz_11@hotmail.com;

        @mail($para, $asunto, utf8_decode($mensaje), $header);
        if($mail){
            
        echo "<h4>Mensaje enviado correctamente</h4>";
        }

    }
} 
?>
