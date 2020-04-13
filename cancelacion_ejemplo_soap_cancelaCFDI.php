<?php
/**
* Ejemplo de cancelacion WS SOAP cancelaCFDI()
* Nota: Para simplificar los ejemplos todas las rutas son relativas y los datos se leen de un archivo, lo cual no debe de hacerse en un ambiente de produccion.
*/
$array_ini =parse_ini_file(__DIR__."/config.ini");

#Parametros requeridos para consumir el metodo de cancelación
$usuarioSIFEI = $array_ini['UsuarioSIFEI'];//;"usuario SIFEI";
$passwordSifei =$array_ini['PasswordSIFEI']; //"password SIFEI";

$rfcEmisor = "RFC del emisor";
$pfx = file_get_contents(__DIR__."/".$array_ini["PFX"]); #se lee el contenido del PFX, solo como ejemplo se lee de un directorio
$passwordPfx ="a0123456789"; #"contraseña del pfx";
$uuids[]= "uuid";
//Para el atributo pfx no es necesario aplicar el base64_encode ya que SoapClient se encarga de realizarlo.
$parametros = array(
	'usuarioSIFEI'=>$usuarioSIFEI,
 	'passwordSifei'=>$passwordSifei,
  	'rfcEmisor'=>$rfcEmisor, 
  	'pfx'=>$pfx, 
  	'passwordPfx'=>$passwordPfx,
  	"uuids"=>$uuids
);
print_r($parametros);
//url de pruebas
$wsdl ="http://devcfdi.sifei.com.mx:8888/CancelacionSIFEI/Cancelacion?wsdl";

$client = new SoapClient($wsdl, 
				array(  
				'soap_version' => SOAP_1_1,
				'trace' => true,
		)); 


try {
	$res = $client->__soapCall( 'cancelaCFDI', array($parametros ));
	
	file_put_contents("acuse.xml", $res->return );
	echo "Se guardo acuse";
} catch (SoapFault $e) { 
	#obtenemos la excepcion:
	var_dump( $e->faultcode, $e->faultstring, $e->detail );
} finally{
	#En ambiente de pruebas mandamos el requets y response  un archivo respecticamente para inspeccionarlos en caso de error:
	//mandamos en un XML el mensaje soap del request
	file_put_contents("request.xml", $client->__getLastRequest());
	//mandamos en un XML el response del xml timbrado
	file_put_contents("response.xml", $client->__getLastResponse());	
}
?>