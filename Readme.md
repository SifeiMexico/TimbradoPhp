# ![Sifei](https://www.sifei.com.mx/web/image/res.company/1/logo?unique=38c7250)




# Ejemplos de timbrado y cancelación en PHP

Este repositorio incluye en ejemplos de los servicios SOAP de timbrado y cancelación de Sifei en en lenguaje PHP.

## Configuración de ejemplos



Los ejemplos se alimentan de un archivo config.ini para leer los datos de conexión, **No hacer esto en produccion**.
La url esta configurada al entorno de pruebas.

Para ejecutar estas pruebas debes solicitar tus accesos de QA(pruebas).

http://sifei.com.mx/

```ini
[timbrado]
UsuarioSIFEI = RFC # usuario sifei
PasswordSIFEI = 12345678a #password de usuario de sifei 
IdEquipoGenerado = f1563ce5 # ide equipo

[cancelacion]
PFX = CER_KEY.pfx    #Solo para el servicio de cancelacion
```

## Generacion de llave PEM con openssl

```bash
#Recibimos el key en formato DER y generarmos la llave en formato PEM
openssl pkcs8 -inform DER -in CSD01_AAA010101AAA.key  -passin pass:12345678a -out CSD01_AAA010101AAA_KEY.pem
```

## Metodos con ejemplos

WS           | Método           |Descripción
------------ | -----------------|-------------
Timbrado     | `getCFDI()`      |Metodo para timbrar CFDI
Cancelación  | `cancelaCFDI()`  | Metodo para cancelar CFDI

## Ejemplos simples

Se incluyen ejemplos simples  para el servicio de timbrado y cancelacion, inspeccionar :

- [Timbrado](http://github.com/SifeiMexico/TimbradoPhp/blob/master/timbrado_ejemploPHP_soap_getCFDI.php)

- [Cancelacion](https://github.com/SifeiMexico/TimbradoPhp/blob/master/cancelacion_ejemplo_soap_cancelaCFDI.php)

# Cliente de Sifei.
Ademas de los ejemplos simples, se provee de todo un proyecto para el uso inmediato de todos los servicios relacionados a timbrado y cancelacion de CFDI.

**Recuerda solicitar tus credenciales de acceso para consumir el servicio.**

## Inicio rápido (menos de 5 minutos)
### Instalar cliente

Para instalar el cliente solo debes instalarlo via composer:

```shell
composer require sifei/timbrado-soap-client
```
Una vez realizado, podras importar las clases incluidas e instanciarlas para la invocacion de metodos ,**por defecto las clases apuntan al entorno de pruebas.**, una vez finalizado tu proceso de integracion podras usar la constante incluida "PROD_ENV", la cual apunta a producción.

### Ejemplo timbrado usando  cliente
```php
<?php
# include_once 'vendor/autoload.php'; #incluir el autoload (generado por composer) para autocargar las clases.

#Importamos las clases
use DHF\Sifei\Ws\Soap\Timbrado\getCFDI;
use DHF\Sifei\Ws\Soap\SifeiTimbradoService;

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
	$zipXml = new ZipArchive();
	if ($zipXml->open($fileTmpZip) === TRUE) {	  		
  		$zipXml->extractTo( $tmpDirName );
		$zipXml->close();
	}
} catch (SoapFault $e) {
	#En caso de un error inspeccionar la excepcion:
	var_dump( $e->faultcode, $e->faultstring, $e->detail)
}
```

### Ejemplo de sellado

```php
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
```


## Descripción 
Ademas de los ejemplos simples, se incluyen 2 clases principales que agrupan las operaciones de los distintos servicios de SIFEI.

- SifeiTimbradoService
    - [getCFDIProcesa(getCFDIProcesa $parameters)](SIFEI_getCFDIProcesa)
    - [getCFDISign(getCFDISign $parameters)](SIFEI_getCFDISign)
    - [getCFDIAndURL(getCFDIAndURL $parameters)](SIFEI_getCFDIAndURL)
    - [getTimbreCFDI(getTimbreCFDI $parameters)](SIFEI_getTimbreCFDI)
    - [CambiaPassword(CambiaPassword $parameters)](SIFEI_CambiaPassword)
    - [cancelaCFDI(cancelaCFDI $parameters)](SIFEI_cancelaCFDI)
    - [cancelaCFDISectorPrimario(cancelaCFDISectorPrimario $parameters)](SIFEI_cancelaCFDISectorPrimario)
    - [cancelaCFDISignature(cancelaCFDISignature $parameters)](SIFEI_cancelaCFDISignature)
    - [getXML(getXML $parameters)](SIFEI_getXML)
    - [getCFDI(getCFDI $parameters)](SIFEI_getCFDI)
    - [getCFDISendPDF(getCFDISendPDF $parameters)](SIFEI_getCFDISendPDF)
    - [getXMLProceso(getXMLProceso $parameters)](SIFEI_getXMLProceso)


- SifeiCancelacionService
    - [cancelaCFDI(cancelaCFDI $parameters)](Método-cancelaCFDI)
    - [procesarRespuesta(procesarRespuesta $parameters)](Método-procesarRespuesta)
    - [cfdiRelacionado(cfdiRelacionado $parameters)](Método-cfdiRelacionado)
    - [peticionesPendientes(peticionesPendientes $parameters)](Método-peticionesPendientes)
    - [consultaSATCFDI(consultaSATCFDI $parameters)](Método-consultaSATCFDI)




# Timbrado:
<h2 id="SIFEI_getCFDIProcesa">Método getCFDIProcesa</h2>

### Request getCFDIProcesa
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getCFDIProcesaResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="SIFEI_getCFDISign">Método getCFDISign</h2>

### Request getCFDISign
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getCFDISignResponse
|Nombre|      Tipo     |
|------|---------------|
|return|xs:base64Binary|

<h2 id="SIFEI_getTimbreCFDI">Método getTimbreCFDI</h2>

### Request getTimbreCFDI
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getTimbreCFDIResponse
|Nombre|      Tipo     |
|------|---------------|
|return|xs:base64Binary|

<h2 id="SIFEI_CambiaPassword">Método CambiaPassword</h2>

### Request CambiaPassword
|   Nombre  |   Tipo  |
|-----------|---------|
|Usuario    |xs:string|
|Password   |xs:string|
|NewPassword|xs:string|

### Response CambiaPasswordResponse
|Nombre|   Tipo   |
|------|----------|
|return|xs:boolean|

<h2 id="SIFEI_cancelaCFDISectorPrimario">Método cancelaCFDISectorPrimario</h2>

### Request cancelaCFDISectorPrimario
|   Nombre   |   Tipo  |
|------------|---------|
|usuarioSIFEI|xs:string|
|passUser    |xs:string|
|rfc         |xs:string|
|UUIDS       |xs:string|

### Response cancelaCFDISectorPrimarioResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="SIFEI_getXML">Método getXML</h2>

### Request getXML
|Nombre|   Tipo  |
|----|---------|
|rfc |xs:string|
|pass|xs:string|
|hash|xs:string|

### Response getXMLResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="SIFEI_getCFDI">Método getCFDI</h2>

### Request getCFDI
|    Nombre   |      Tipo     |
|-------------|---------------|
|Usuario      |xs:string      |
|Password     |xs:string      |
|archivoXMLZip|xs:base64Binary|
|Serie        |xs:string      |
|IdEquipo     |xs:string      |

### Response getCFDIResponse
|Nombre|      Tipo     |
|------|---------------|
|return|xs:base64Binary|

<h2 id="SIFEI_getXMLProceso">Método getXMLProceso</h2>

### Request getXMLProceso
|    Nombre   |   Tipo  |
|-------------|---------|
|rfc          |xs:string|
|pass         |xs:string|
|idseguimiento|xs:long  |

### Response getXMLProcesoResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|




# Cancelacion:
<h2 id="Cancelacion_procesarRespuesta">Método procesarRespuesta</h2>

### Request procesarRespuesta
|    Nombre   |      Tipo     |
|-------------|---------------|
|usuarioSIFEI |xs:string      |
|passwordSIFEI|xs:string      |
|rfcReceptor  |xs:string      |
|folios       |tns:folios     |
|pfx          |xs:base64Binary|
|passwordPfx  |xs:string      |

### Response procesarRespuestaResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="Cancelacion_cfdiRelacionado">Método cfdiRelacionado</h2>

### Request cfdiRelacionado
|    Nombre   |      Tipo     |
|-------------|---------------|
|usuarioSIFEI |xs:string      |
|passwordSIFEI|xs:string      |
|rfcReceptor  |xs:string      |
|rfcEmisor    |xs:string      |
|uuid         |xs:string      |
|pfx          |xs:base64Binary|
|passwordPfx  |xs:string      |

### Response cfdiRelacionadoResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="Cancelacion_peticionesPendientes">Método peticionesPendientes</h2>

### Request peticionesPendientes
|    Nombre   |   Tipo  |
|-------------|---------|
|usuarioSIFEI |xs:string|
|passwordSIFEI|xs:string|
|rfcReceptor  |xs:string|

### Response peticionesPendientesResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|

<h2 id="Cancelacion_consultaSATCFDI">Método consultaSATCFDI</h2>

### Request consultaSATCFDI
|    Nombre   |   Tipo  |
|-------------|---------|
|usuarioSIFEI |xs:string|
|passwordSIFEI|xs:string|
|id           |xs:string|
|re           |xs:string|
|rr           |xs:string|
|tt           |xs:string|
|fe           |xs:string|

### Response consultaSATCFDIResponse
|Nombre|   Tipo  |
|------|---------|
|return|xs:string|



## ¿Necesitas mas ejemplos?
Si necesitas mas ejemplos del resto de servicios favor de generar un nuevo issue