<?php

use DHF\Sifei\Ws\Soap\Cancelacion\cancelaCFDI;
use DHF\Sifei\Ws\Soap\Cancelacion\Cancelacion;
use DHF\Sifei\Ws\Soap\SifeiCancelacionService;

 
include_once 'vendor/autoload.php';

/**
* Ejemplo de cancelacion WS SOAP cancelaCFDI()
* Nota: Para simplificar los ejemplos todas las rutas son relativas y los datos se leen de un archivo, lo cual no debe de hacerse en un ambiente de produccion.
* # PFX CONFORMADO POR key y cert
*/
$array_ini =parse_ini_file(__DIR__."/config.ini");

#Parametros requeridos para consumir el metodo de cancelación
$usuarioSIFEI = $array_ini['UsuarioSIFEI'];//;"usuario SIFEI";
$passwordSifei =$array_ini['PasswordSIFEI']; //"password SIFEI";

$rfcEmisor = "RFC del emisor";
$pfx = file_get_contents(__DIR__."/".$array_ini["PFX"]); #se lee el contenido del PFX, solo como ejemplo se lee de un directorio
$passwordPfx ="a0123456789"; #"contraseña del pfx";
$uuids[]= "uuid";



# la clase apunta por defecto al entorno de pruebas , si desea apuntar a produccion usa la constante PROD_ENV incluida en la clase.
# $client = new SifeiCancelacionService(SifeiCancelacionService::PROD_ENV);
$client = new SifeiCancelacionService(
    SifeiCancelacionService::DEV_ENV,
    ['trace'=>true]    #Para recuperar el request y response
);

#instanciamos la clase que modela el servicio
$cancelaParameters= new cancelaCFDI();
$cancelaParameters->setUsuarioSIFEI($usuarioSIFEI);
$cancelaParameters->setPasswordSifei($passwordSifei);
$cancelaParameters->setRfcEmisor($rfcEmisor);
//Para el atributo pfx no es necesario aplicar el base64_encode ya que SoapClient se encarga de realizarlo.
$cancelaParameters->setPfx($pfx);
$cancelaParameters->setPasswordPfx($passwordPfx);
$cancelaParameters->setUuids($uuids);



try {
    #invocamos al metodo
	$res = $client->cancelaCFDI($cancelaParameters);	
	file_put_contents("acuse.xml", $res->getReturn() );
	echo "Se guardo acuse";
} catch (SoapFault $e) { 
	#obtenemos la excepcion:
	var_dump( $e->faultcode, $e->faultstring, $e->detail );
} finally{
	$time=time();
	#En ambiente de pruebas mandamos el requets y response  a un archivo respecticamente para inspeccionarlos en caso de error, se asigna un timestamp para identificarlos:
	//mandamos en un XML el mensaje soap del request
	file_put_contents("cancelaCFDI_request_{$time}.xml", $client->__getLastRequest());
	//mandamos en un XML el response del xml timbrado
	file_put_contents("cancelaCFDI_response_{$time}.xml", $client->__getLastResponse());	
}
?>