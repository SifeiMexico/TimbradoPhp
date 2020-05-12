<?php 
#importamos el loader de clases(resuelve las clases):
include_once 'vendor/autoload.php';
#importamos las clases

use DHF\Sifei\Ws\Soap\Timbrado\getCFDI;
use DHF\Sifei\Ws\Soap\SifeiTimbradoService;


$cfdiSelladoPath=__DIR__."/assets/cfdi.xml";//Ruta del xml sellado
$originalName=basename($cfdiSelladoPath);
#Se lee el contenido del XML
$xml = file_get_contents($cfdiSelladoPath);
$tmpDirName = "tmp"; //nombre del directorio temporal
$array_ini =parse_ini_file(__DIR__."/config.ini");

//accesos
$usuario=$array_ini['UsuarioSIFEI'];
$password=$array_ini['PasswordSIFEI'];
$idEquipo=$array_ini['IdEquipoGenerado'];

$serie='';
  	


#clase que incluye todos las invocaciones a nuestros servicios de Sifei
$sifeiService =new SifeiTimbradoService(
    SifeiTimbradoService::DEV_ENV,
    ['trace'=>true]    #Para recuperar el request y response
);
#clase con los parametros de timbrado:
$timbradoParams= new getCFDI();
$timbradoParams->setUsuario($usuario);
$timbradoParams->setPassword($password);
$timbradoParams->setIdEquipo($idEquipo);

$timbradoParams->setSerie($serie);

$timbradoParams->setArchivoXMLZip($xml);#arhivo xml


try {
	$res = $sifeiService->getCFDI($timbradoParams);
	$fileTmpZip = "timbrado.zip";  //nombre del zip
	//mandamos en un zip el xml timbrado en caso de exito
	file_put_contents( $fileTmpZip, $res->getReturn());
	$zipXml = new ZipArchive();//En caso de not found ZipArchive, asegurate de tener instalada la extension

	if ($zipXml->open($fileTmpZip) === TRUE) {	  		
  		$zipXml->extractTo( $tmpDirName );
		$zipXml->close();
	}
	 
	
} catch (SoapFault $e) {
	#En caso de un error inspeccionar la excepcion:
	var_dump( $e->faultcode, $e->faultstring, $e->detail );
} finally{
	$time=time();
	#En ambiente de pruebas mandamos el requets y response  a un archivo respecticamente para inspeccionarlos en caso de error, se asigna un timestamp para identificarlos:
	//mandamos en un XML el mensaje soap del request
 
	
	$doc=new DOMDocument();
	$doc->loadXML($sifeiService->__getLastRequest());
	$doc->formatOutput=true;
	$doc->save(__DIR__."/workfiles/timbrado_getCFDI_request_{$time}.xml");

	//mandamos en un XML el response del xml timbrado
	
	$doc=new DOMDocument();
	$doc->loadXML($sifeiService->__getLastResponse());
	$doc->formatOutput=true;
	$doc->save(__DIR__."/workfiles/timbrado_getCFDI_response_{$time}.xml");
}
?>