<?php
    $destino = 'ferchoibasal@gmail.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $header = "Enviado desde tu página Xim";
    $mensajeCompleto = $mensaje . "\n Atentamente: " . $nombre;

    mail($destino, $mensajeCompleto, $header);
    echo "<script> alert('Correo Enviado')</script>";
    echo "<script> setTimeout(\"location.href='index.hmtl'\",500)</script>";

?>