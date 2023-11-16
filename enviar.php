<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    //PASO DECLARAR VARIABLES 
    $NOMBRE= $_POST['nombre'];
    $CORREO= $_POST['email'];
    $TELEFONO= $_POST['telefono'];
    $MENSAJE= $_POST['mensaje'];
//Paso2 destinatario
$DESTINATARIO= 'gbarboza.es@gmail.com';
//paso 3 asunto
$ASUNTO='CONTACTO DE CLIENTE HALL OF THE ROCK';
// PASO4 DISEÑAR EL CUERPO DEL CORREO
$CUERPO= "Nombre: " . $NOMBRE . "\n";
$CUERPO.= "Email: " . $CORREO . "\n";
$CUERPO.= "Telefono: " . $CELULAR . "\n";
$CUERPO.= "Mensaje: " . $MENSAJE . "\n";
//PASO5 pasamos las variables para enviar al correo
if(mail($DESTINATARIO, $ASUNTO, $CUERPO))
   echo "El mensaje se envio y fue Rockstar";
}else{
    echo"El mensaje se al club de los 27";
}
?>