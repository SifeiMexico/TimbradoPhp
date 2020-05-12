<?php
use DHF\Sifei\Ws\Soap\utils\CFDIUtils;
//clase ejeemplo de genracion de cadena originaly sellado
include_once 'vendor/autoload.php';
function println($str){
    echo $str."\n";
}
#para sellar se necesita generar la cadena original y luego sellarla, esta clase ofrece el metodo para hacer todo en un sola invocacion

$dom= new DOMDocument();
#en este caso se carga el xml desde archivo
$dom->load(__DIR__."/assets/cfdi.xml");
$utils= new CFDIUtils();
$utils->setComprobante($dom);
#todo desde un solo metodo: genera la cadena original, sella y codifica en base64 lista para agregar en el atributo Sello del CFDI

println($utils->getSello(
    file_get_contents("ENCRYPTED_KEY.pem"), #llave en formato PEM
    "12345678a")                    #contraseña
);
# usando .key directamente
println($utils->getSello(
    file_get_contents("key.key"), #llave en formato DER
    "12345678a",
    'DER'                    #contraseña
    )
);
#si deseas ver la cadena original.
println($utils->getCadenaOriginal());