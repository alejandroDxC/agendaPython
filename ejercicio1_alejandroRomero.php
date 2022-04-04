<?php
$variable2 = '';
$message= '';
$archivo = fopen( "confirm_inscrip_enap_esp.txt", "r" );
while (!feof($archivo)) {
    // Leyendo una linea
    $traer = fgets($archivo);
    $bodytag = str_replace("[titulo_evento_correo]", "Evento de prueba", $traer);
    $bodytag = str_replace("[fecha]", date("Y-m-d H:i:s"), $bodytag);
    $bodytag = str_replace("[calidad]", " calidad??", $bodytag);
    $bodytag = str_replace("[nombre]", "Alejandro", $bodytag);
    $bodytag = str_replace("[apellido]", "Romero", $bodytag);
    $bodytag = str_replace("[cargo]", "Desarrollador de software", $bodytag);
    $bodytag = str_replace("[razon_social]", " Una razon social de prueba", $bodytag);
    $bodytag = str_replace("[pais]", "colombia", $bodytag);
    $bodytag = str_replace("[titulo_evento]", "un evento de prueba", $bodytag);
    $bodytag = str_replace("[url]", "google.com", $bodytag);
    $bodytag = str_replace("[login]", "aromero", $bodytag);
    $bodytag = str_replace("[clave]", "12345", $bodytag);
    $bodytag = str_replace("[firma]", "black", $bodytag);
    $bodytag = str_replace("[ciudad]", "Bogota", $bodytag);
    $message .= $bodytag;
}
echo nl2br($variable2);
    // Imprimiendo una linea
    mail(
        "ypazval@gmail.com",
        'correo prueba tecnica',
        $message
    );