<?php


if($_POST["nombre"]=="" || $_POST["apellido"]=="" || $_POST["email"]=="" || $_POST["comentarios"]=="") {

    echo "Hay campos requeridos. Revisalos"
    die();
}

$texto_mail=$POST["comentarios"];

$destinatario=$_POST["email"];

$asunto=$_POST["asunto"];

//MIME= Multipurpose Internet Mail Extensions
$headers="MIME-Version: 1.0\r\n";

//.= sirve para concatenar lo que ya hay en el interior de la variable con lo que pongamos a continuacion
$headers.= "Content-type: text/htmml; charset=iso-8859-1\r\n"; //codificacion de caracteres

//concatena con el DE QUIEN VIENE
$headers.= "From: Alejito <info@virtualalestore.com>\r\n";

//3 parmetros obligatorios de funcion mail
$exito=mail($destinatario, $asunto, $texto_mail, $headers);

//evaluando funcion booleana mail

if($exito) {
    echo "Mensaje enviado con exito";
}
else {
    echo "Hubo un error";
}

?>