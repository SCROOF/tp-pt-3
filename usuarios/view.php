<?php

$diccionario = array(
'Título de la Página'=>'POO y MVC en PHP',
'keywords'=>'poo, mvc, php, arquitectura de software',
'description'=>'El paradigma de la programación orientada a objetos con el
patrón arquitectónico MVC en PHP'
);

$vista = file_get_contents('../site_media/html/editar_usuario.html');

foreach ($diccionario as $clave=>$valor) {
$vista = str_replace('{'.$clave.'}', $valor, $vista);
}

print $vista;

?>