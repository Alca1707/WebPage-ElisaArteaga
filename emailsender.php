<?php
try{
    $Name = filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
    $Email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
    $Phone = filter_input(INPUT_POST, 'Phone', FILTER_SANITIZE_STRING);
    $Subject = filter_input(INPUT_POST, 'Subject', FILTER_SANITIZE_STRING);
    $Type = filter_input(INPUT_POST, 'Type', FILTER_SANITIZE_STRING);
    $Message = filter_input(INPUT_POST, 'Message', FILTER_SANITIZE_STRING);
    
    $cabeceras = "From: ". $Name ." <". $Email .">" . "\r\n";
    
    $To = "hello@elisaarteaga.com";
    $Mensaje = $Message;
    
    $Mensaje .= "\n\n";
    $Mensaje .= "Nombre: " . $Name . "\n";
    $Mensaje .= "Email: " . $Email  . "\n";
    $Mensaje .= "Teléfono: " . $Phone  . "\n";
    $Mensaje .= "Método de contacto: " . $Type  . "\n";

    if(!mail($To, $Subject, $Mensaje, $cabeceras)){
        throw new Exception('Failed');
    }
    header('Location: contactForm.php#SENDED');
}
catch (Exception $e) {
    header('Location: contactForm.php#FAILED');
}
?>