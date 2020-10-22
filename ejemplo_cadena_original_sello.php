<?php
use DHF\Sifei\Ws\Soap\utils\CFDIUtils;
/**
 * Ejemplo para la generacion de sello. 
 * 
 * Contexto. El sello es la cadena original firmada mediante la llave (.key) y un password. 
 * La cadena original es una cadena de texto que comprende todos los CFDI
 * 
 * Nota: Si ocurre un error favor de confirmar que la llave (PEM O DER) efectivamente sean una llave y no el certificado, puedes hacerlo segun el caso
 * Para obtener info de un certificado(notar la extension):
 *  >openssl x509 -in CSD01_AAA010101AAA.cer -inform der -text
 * 
 * 
 * 
 * 
 * Flujo : 
 * 
 * CFDI-> procesamiento de cadenaoriginal->cadena original producida-> firmado/sellado-> sello generado->anexar sello al atributo sello del nodo Comprobante->Enviar a timbrar->Recuperar CFDI timbrado
 * 
 * 
 * ----------------------------------------------------------------------------------------------------------------
 * En caso de no poder generar el sello con el .key, convertir el KEY a FORMATO PEM con openssl:
 * >openssl pkcs8 -inform DER -in CSD01_AAA010101AAA.key  -passin pass:12345678a -out CSD01_AAA010101AAA_KEY.PEM
 * donde:
 *      Entrada) CSD01_AAA010101AAA.key Llave en formato DER
 *      Salida)  CSD01_AAA010101AAA_KEY.PEM  Llave en formato PEM
 */
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


#AHORA se establece la llave, la llave puede ser en Formato PEM o formato DER(generalmente cuando tiene extension .key):

#Metodos:
#(1) PEM    
println("-----Sello mediante KEY en formato PEM:");
println($utils->getSello(
    file_get_contents(__DIR__."/KeyCert/CSD01_AAA010101AAA_KEY.PEM"), #llave en formato PEM
    "12345678a")                    #contraseña
);
#O bien:

println("-----Sello mediante KEY en formato DER:");
#(2)DER. Usando .key directamente (DER)
println($utils->getSello(
    file_get_contents(__DIR__."/KeyCert/CSD01_AAA010101AAA.key"), #llave en formato DER
    "12345678a",
    'DER'                    #contraseña
    )
);

println("-----Cadena original:");
#si deseas ver la cadena original.
println($utils->getCadenaOriginal());